let jsonObj;/* = {
    "dogs":[
       {
          "name":"Charlie",
          "breed":"Doberman",
          "sex":"M",
          "shots":"Y",
          "age":"8",
          "size":"medium",
          "licensed":"Y",
          "neutered":"Y",
          "owners":"Julia Reanolds",
          "notes":"N/A"
       },
       {
          "name":"Spike",
          "breed":"Pitbull",
          "sex":"M",
          "shots":"N",
          "age":"12",
          "size":"large",
          "licensed":"Y",
          "neutered":"Y",
          "owners":"Boris Yankovic",
          "notes":"N/A"
       },
       {
          "name":"Jewel",
          "breed":"Poodle",
          "sex":"F",
          "shots":"Y",
          "age":"4",
          "size":"small",
          "licensed":"N",
          "neutered":"N",
          "owners":"Pam Sanders",
          "notes":"N/A"
       }
    ],
    "cats":[
       {
          "name":"Maggie",
          "breed":"Calico",
          "sex":"F",
          "shots":"Y",
          "age":"11",
          "declawed":"N",
          "neutered":"Y",
          "owners":"Amelia Frame",
          "notes":"N/A"
       },
       {
          "name":"Thomas",
          "breed":"Tabby",
          "sex":"M",
          "shots":"Y",
          "age":"4",
          "declawed":"N",
          "neutered":"Y",
          "owners":"Paul Pence",
          "notes":"N/A"
       },
       {
          "name":"Mr. Pickles",
          "breed":"British Shorthair",
          "sex":"M",
          "shots":"Y",
          "age":"7",
          "declawed":"Y",
          "neutered":"N",
          "owners":"Casey Bird",
          "notes":"N/A"
       }
    ],
    "exotics":[
       {
          "name":"Benedict",
          "species":"Bearded Dragon",
          "sex":"M",
          "age":"3",
          "owners":"Cody Wagstaff",
          "notes":"N/A"
       },
       {
          "name":"Pokey",
          "species":"Guinea Pig",
          "sex":"F",
          "age":"2",
          "owners":"Mark Anderson",
          "notes":"N/A"
       },
       {
          "name":"Dr. Quantum",
          "species":"Cockatiel",
          "sex":"M",
          "age":"3",
          "owners":"Burt Sanders",
          "notes":"N/A"
       }
    ],
    
};*/
let descriptions = {
    "name":"Name of Pet",
    "breed":"Breed of the Pet",
    "sex":"Sex of the Pet, Male or Female",
    "shots":"Current Vaccination Status",
    "age":"Age in Years",
    "size":"Large, Medium, or Small",
    "licensed":"Current License Status",
    "neutered":"Whether Pet is Neutered",
    "owner":"Owner(s) of the Pet",
    "notes":"Misc. Information and Notes",
    "declawed":"Whether Cat is Declawed",
    "species":"Species of the Pet"
};
let table = $("#petTable");
let tableData;
let fields;
let sortKey;
let sortAscending;
let rowsPerPage = 10;
let pages;
let currentPage = 1;

function loadTable()
{
    tableData = jsonObj["data"];
    fields = Object.keys(jsonObj["data"][0]);
    let inner = '<thead class="thead-dark">';
    
    for(field of fields){
        inner += '<th scope="col" class="text-capitalize pointer" data-key="' + field + '" title="' + descriptions[field] + '"data-toggle="tooltip" data-placement="top">' + field + '<span id="asc"> &#9651;</span><span id="desc"> &#9661;</span></th>'; 
    }
    inner += '<tr>';
    for(field of fields){
        inner +='<td><input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" data-key="' + field + '"/></td>'
    }
    inner += '</tr>';
    inner += '</thead><tbody></tbody';
    table.html(inner);
    populateRows();
    
    table.on("click", "th", handleSort);
    table.on("input", "input", filterPets);
    //table.find("td[data-shots]").on("click", null, shotModal);
    //table.find("td[data-shots]").addClass("pointer");
    table.find("td[data-notes]").on("click", null, noteModal);
    table.find("td[data-notes]").addClass("pointer");
    $('[data-toggle="tooltip"]').tooltip();
    table.find("th").css("cursor", "pointer");
}

function populateRows(){
    let inner = "";
    for(i=((currentPage-1)*rowsPerPage);i<(((currentPage-1)*rowsPerPage)+(tableData.length>rowsPerPage?rowsPerPage:tableData.length));i++){
        inner += '<tr>';
        for(field of fields){
            let data = tableData[i][field];
            if(field == "notes"){
                if(data == null){
                    inner += '<td><i>None</i></td>';
                }
                else{
                    inner += '<td data-notes="';
                    console.log(data);
                    console.log(data[0]["vet"]);
                    for(note of data){
                        //inner += '<td data-notes=\'' + JSON.stringify(data) + '\' >'+data.length+'</td>'; // TODO - make pretty
                        inner += '<b>'+note["vet"]+'</b><br>';
                        inner += note["date"].split(' ')[0] + '<br>';
                        inner += note["note"] + '<br><br>';
                    }
                    inner += '" >'+ data.length +'</td>';
                }
            }
            else if(field == "shots" || field == "declawed" || field == "neutered" || field == "licensed"){
                inner += '<td>';
                if(data == "yes"){
                    inner += '<i class="fas fa-check-circle"></i>';
                }
                else{
                    inner += '<i class="fas fa-times-circle"></i>';
                }
                inner += '</td>';
            }
            else{
                inner += '<td>' + data + "</td>";
            }
        }
        inner += '</tr>';
    }
    table.find("tbody").html(inner);

}

function handleSort(event){
    let header = $(event.target);
    sortKey = header.attr("data-key")
    if(header.hasClass("desc")){
        clearSort();
        header.addClass("asc");
        sortAscending = true;
        sortPets();
    }
    else if(header.hasClass("asc")){
        clearSort();
        header.addClass("desc");
        sortAscending = false;
        sortPets();
    }
    else
    {
        clearSort();
        header.addClass("asc");
        sortAscending = true;
        sortPets();
    }
}


function filterPets(event){
    tableData = jsonObj["data"];
    currentPage = 1;
    for(field of fields){
        let text = table.find('input[data-key="' + field + '"]').val();
        if(text != "" && text != null && text !== undefined){
            tableData = tableData.filter(function(pet){
                if(field == "age"){
                    return pet[field].toString() == text;
                }
                else if(field == "notes"){
                    if(pet[field] == null){
                        return text == "0" || text.startsWith("n");
                    }
                    else{
                        return pet[field].length.toString() == text;
                    }
                }
                else{
                    return pet[field].toLowerCase().startsWith(text.toLowerCase());
                }
            });
        }
    }

    pages = tableData.length;
    currentPage = 1;
    let defaultOpts = {
        totalPages: 20
    };
    $("#paginate").twbsPagination('destroy');
    $("#paginate").twbsPagination($.extend({}, defaultOpts, {
        startPage: currentPage,
        totalPages: pages,
        onPageClick: changePage
    }));
    sortPets();
}


function sortPets(){
    if(sortKey !== undefined){
        let direction = sortAscending ? 1 : -1;
        if(sortKey == "notes"){
            tableData.sort(function(a,b){
                return (b.length-a.length)*direction;
            });
        }
        else{
            tableData.sort(function(a,b){
                return a[sortKey].toLowerCase().localeCompare(b[sortKey].toLowerCase())*direction;
            });
        }
    }
    populateRows();
}

function clearSort(){
    table.find("th").removeClass("asc");
    table.find("th").removeClass("desc");
}

function shotModal(event){
    $('.modal-title').html("Shot Status");
    $('.modal-body').html($(event.target).attr("data-shots"));
    $("#exampleModalCenter").modal();
}

function noteModal(event){
    $('.modal-title').html("Notes");
    $('.modal-body').html($(event.target).attr("data-notes"));
    $("#exampleModalCenter").modal();
}


function changePage(event, page){
    currentPage = page;
    loadTable(Object.keys(jsonObj["data"][0]));
}

$(document).ready(function(){
    $('#paginate').twbsPagination({
        totalPages: pages,
        visiblePages: 10,
        onPageClick: changePage
    });
 
});