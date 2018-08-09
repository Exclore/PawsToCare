<html>
<head>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src = "ServerSetup/FakerJS/faker.js-master/build/build/faker.js" type = "text/javascript"></script>
<?php include_once "functions.php" ?>
<script>

let catBreeds = ["Abyssinian","American Bobtail","American Curl","American Shorthair","American Wirehair","Balinese","Bengal","Birman","Bombay","British Shorthair","Burmese","Burmilla","Chartreux","Colorpoint Shorthair","Cornish Rex","Devon Rex","Egyptian Mau","European Burmese","Exotic","Havana Brown","Japanese Bobtail","Khao Manee","Korat","LaPerm","Lykoi","Maine Coon Cat","Manx","Norwegian Forest Cat","Ocicat","Oriental","Persian","Ragamuffin","Ragdoll","Russian Blue","Scottish Fold","Selkirk Rex","Siamese","Siberian","Singapura","Somali","Sphynx","Tonkinese","Turkish Angora","Turkish Van"];
let dogBreeds = ["Affenpinscher","Afghan Hound","Ainu Dog","Airedale Terrier","Akbash","Akita","Alapaha Blue Blood Bulldog","Alaskan Husky","Alaskan Klee Kai","Alaskan Malamute","American Bulldog","American Bullnese","American Cocker Spaniel","American Eskimo Dog","American Foxhound","American Hairless Terrier","American Indian Dog","American Pit Bull Terrier","American Staffordshire Terrier","American Water Spaniel","Anatolian Shepherd","Anglo-Français de Petite Vénerie","Appenzell Mountain Dog","Australian Cattle Dog","Australian Kelpie","Australian Shepherd","Australian Stumpy Tail Cattle Dog","Australian Terrier","Austrian Shorthaired Pinscher","Azawakh","Barbet","Basenji","Basset Bleu Gascogne","Basset Hound","Beagle","Bearded Collie","Beauceron","Bedlington Terrier","Belgian Malinois","Belgian Sheepdog","Belgian Shepherd Groenendael","Belgian Shepherd Laekenois","Belgian Tervuren","Bergamasco","Berger Picard","Bernese Mountain Dog","Bichon Frise","Biewer Yorkie","Black and Tan Coonhound","Black Mouth Cur","Black Russian Terrier","Bloodhound","Blue Gascony Griffon","Blue Heeler","Bluetick Coonhound","Boerboel","Bolognese","Border Collie","Border Terrier","Borzoi","Boston Terrier","Bouvier des Flandres","Boxer","Boykin","Bracco Italiano","Brazilian Terrier","Breed Unknown","Briard","Brittany","Brussels Griffon","Bukovina Sheepdog","Bull Terrier","Bulldog","Bullmastiff","Cairn Terrier","Canaan Dog","Canadian Eskimo Dog","Cane Corso","Cardigan Welsh Corgi","Carolina Dog","Carpathian Sheepdog","Catahoula Leopard Dog","Catalonian Sheepdog","Caucasian Ovcharka","Cavalier King Charles Spaniel","Central Asian Ovcharka","Central Asian Shepherd Dog","Cesky Terrier","Chart Polski","Chesapeake Bay Retriever","Chihuahua","Chinese Crested","Chinese Foo Dog","Chinese Shar-Pei","Chinook","Chow Chow","Cirneco dell Etna","Clumber Spaniel","Cocker Spaniel","Collie","Coton de Tulear","Croatian Sheepdog","Curly-Coated Retriever","Czechoslovakian Wolfdog","Dachshund","Dalmatian","Dandie Dinmont Terrier","Danish Swedish Farmdog","Dingo","Doberman Pinscher","Dogo Argentino","Dogue de Bordeaux","Drever","Dutch Partridge Dog","Dutch Shepherd","English Cocker Spaniel","English Coonhound","English Foxhound","English Pointer","English Setter","English Shepherd","English Springer Spaniel","English Toy Spaniel","Entelbucher Mountain Dog","Estonian Hound","Estrela Mountain Dog","Eurasier","Feist","Field Spaniel","Fila Brasileiro","Finnish Lapphund","Finnish Spitz","Flat-coated Retriever","French Brittany","French Bulldog","French Spaniel","Galgo Espanol","German Coolie","German Hunt Terrier","German Pinscher","German Shepherd Dog (GSD)","German Shorthaired Pointer","German Spitz","German Wirehaired Pointer","Giant Schnauzer","Glen of Imaal Terrier","Golden Retriever","Gordon Setter","Grand Basset Griffon Vendeen","Great Dane","Great Gascony Blue","Great Japanese Dog","Great Pyrenees","Greater Swiss Mountain Dog","Greyhound","Hamiltonstövare","Harrier","Havanese","Hovawart","Hungarian Wirehaired Vizsla","Ibizan Hound","Icelandic Sheepdog","Irish Red and White Setter","Irish Setter","Irish Terrier","Irish Water Spaniel","Irish Wolfhound","Italian Greyhound","Jack Russell Terrier","Jagdterrier","Japanese Chin","Japanese Spitz","Japanese Terrier","Kai Ken","Kangal Dog","Karelian Bear Dog","Keeshond","Kerry Blue Terrier","Kishu","Komondor","Kooikerhondje","Korean Jindo","Kuvasz","Kyi Leo","Labrador Retriever","Lagotto Romagnolo","Lakeland Terrier","Lancashire Heeler","Large Munsterlander","Leonberger","Lhasa Apso","Longhaired Whippet","Lowchen","Lurcher","Maltese","Manchester Terrier – Standard","Manchester Terrier – Toy","Maremma","Mastiff","Mastin Espanol","McNab","Mexican Hairless (Xoloitzcuintli)","Mi ki","Miniature Australian Shepherd","Miniature Bull Terrier","Miniature Dachshund","Miniature Fox Terrier","Miniature Pinscher","Miniature Poodle","Miniature Schnauzer","Miniature Spitz","Mixed Breed","Mountain Cur","Mudi","Native American Indian Dog","Neapolitan Mastiff","New Guinea Singing Dog","Newfoundland","Norfolk Terrier","Norrbottenspets","North American Miniature Australian","North American Shepherd","Norwegian Buhund","Norwegian Elkhound","Norwegian Lundehund","Norwich Terrier","Nova Scotia Duck Tolling Rtvr.","Old English Sheepdog","Olde Boston Bulldogge","Olde English Bulldogge","Otterhounds","Papillon (and Phalene)","Parson Russell Terrier","Patterdale Terrier","Pekingese","Pembroke Welsh Corgi","Peruvian Inca Orchid","Petit Basset Griffon Vendeen","Pharaoh Hounds","Plott Hound","Pointer","Polish Owczarek Nizinny","Polish Tatra Sheepdog","Pomeranian","Portuguese Podengo Pequeno","Portuguese Podengo Smooth-Haired Grande","Portuguese Podengo Smooth-Haired Medio","Portuguese Podengo Smooth-Haired Pequeno","Portuguese Podengo Wire-Haired Grande","Portuguese Podengo Wire-Haired Pequeno","Portuguese Water Dog","Portuguese Wire-Haired Podengo Medio","Potcake","Prazsky Krysarik","Presa Canario","Pudel Viele Farben","Pudelpointer","Pug","Puli","Pumi","Pyrenean Shepherd","Rat Terrier","Red Heeler","Redbone Coonhound","Redtick Coonhound","Rhodesian Ridgeback","Romanian Mioritic Shepherd Dog","Rottweiler","Running Walker Foxhound","Russian Spaniel","Russian Toy Terrier","Russian-European Laïka","Ryukyu","Saint Bernard","Saint Miguel Cattle Dog","Saluki","Samoyed","Sarloos Wolfhound","Sarplaninac","Sato","Schapendoes","Schipperke","Scottish Deerhound","Scottish Terrier","Sealyham Terrier","Seppala Siberian Sleddog","Shetland Sheepdog","Shiba Inu","Shih Tzu","Shikoku","Shiloh Shepherd","Siberian Husky","Silken Windhound","Silky Terrier","Skye Terrier","Sloughi","Slovakian Rough Haired Pointer","Small Munsterlander","Smooth Fox Terrier","Soft Coated Wheaten Terrier","South African Boerboel","South Russian Ovcharka","Spanish Mastiff","Spanish Water Dog","Spinone Italiani","Stabyhoun","Staffordshire Bull Terrier","Standard Poodle","Standard Schnauzer","Stephens’ Cur","Sussex Spaniel","Swedish Lapphund","Swedish Valhund","Swiss Mountain Dog","Tamaskan Dog","Teddy Roosevelt Terrier","Tenterfield Terrier","Texas Blue Lacy","Thai Bangkaew Dog","Thai Ridgeback","Tibetan Mastiff","Tibetan Spaniel","Tibetan Terrier","Tosa","Toy Fox Terrier","Toy Poodle","Transylvanian Hound","Treeing Tennessee Brindle","Treeing Walker Coonhound","Valley Bulldog","Vizsla","Volpino Italiano","Weimaraner","Welsh Springer Spaniel","Welsh Terrier","West Highland White Terrier","Wheaten Terrier","Whippet","White Shepherd Dog","Wire Fox Terrier","Wirehaired Dachshund","Wirehaired Pointing Griffon","Yorkshire Terrier"];
let exoticBreeds = ["Alligator","Caiman","Crocodile","Bat","Bear","Bush Baby","Ferret","Fox","Frog","Toad","Genet","Hedgehog","Insect","Kinkajou","Lemur","Lizard","Opossum","Sugar Glider","Wallaby","Wallaroo","Monkey","Parrot","Pig","Goat","Raccoon","Raptor","Capybaras","Chinchilla","Patagonian Cavy","Squirrel","Salamander","Seal","Skunk","Sloth","Slow Loris","Snake","Tarantula","Tortoise","Turtle","Wolf"];
let petNames = ["Abbey","Abbie","Abby","Abel","Abigail","Ace","Adam","Addie","Admiral","Aggie","Aires","Aj","Ajax","Aldo","Alex","Alexus","Alf","Alfie","Allie","Ally","Amber","Amie","Amigo","Amos","Amy","Andy","Angel","Angus","Annie","Apollo","April","Archie","Argus","Aries","Armanti","Arnie","Arrow","Ashes","Ashley","Astro","Athena","Atlas","Audi","Augie","Aussie","Austin","Autumn","Axel","Axle","Babbles","Babe","Baby","Baby-doll","Babykins","Bacchus","Bailey","Bam-bam","Bambi","Bandit","Banjo","Barbie","Barclay","Barker","Barkley","Barley","Barnaby","Barney","Baron","Bart","Basil","Baxter","Bb","Beamer","Beanie","Beans","Bear","Beau","Beauty","Beaux","Bebe","Beetle","Bella","Belle","Ben","Benji","Benny","Benson","Bentley","Bernie","Bessie","Biablo","Bibbles","Big Boy","Big Foot","Biggie","Billie","Billy","Bingo","Binky","Birdie","Birdy","Biscuit","Bishop","Bits","Bitsy","Bizzy","Bj","Blackie","Black-jack","Blanche","Blast","Blaze","Blondie","Blossom","Blue","Bo","Bo","Bob","Bobbie","Bobby","Bobo","Bodie","Bogey","Bones","Bongo","Bonnie","Boo","Boo-boo","Booker","Boomer","Boone","Booster","Bootie","Boots","Boozer","Boris","Bosco","Bosley","Boss","Boy","Bozley","Bradley","Brady","Braggs","Brandi","Brando","Brandy","Bridgett","Bridgette","Brie","Brindle","Brit","Brittany","Brodie","Brook","Brooke","Brownie","Bruiser","Bruno","Brutus","Bubba","Bubbles","Buck","Buckeye","Bucko","Bucky","Bud","Budda","Buddie","Buddy","Buddy Boy","Buffie","Buffy","Bug","Bugsey","Bugsy","Bullet","Bullwinkle","Bully","Bumper","Bunky","Buster","Buster-brown","Butch","Butchy","Butter","Butterball","Buttercup","Butterscotch","Buttons","Buzzy","Caesar","Cali","Callie","Calvin","Cameo","Camille","Candy","Capone","Captain"," ","Carley","Casey","Casper","Cassie","Cassis","Cha Cha","Chad","Chamberlain","Champ","Chance","Chanel","Chaos","Charisma","Charles","Charlie","Charlie Brown","Charmer","Chase","Chauncey","Chaz","Checkers","Chelsea","Cherokee","Chessie","Chester","Chevy","Chewie","Chewy","Cheyenne","Chi Chi","Chic","Chico","Chief","Chili","China","Chip","Chipper","Chippy","Chips","Chiquita","Chivas","Chloe","Chocolate","Chrissy","Chubbs","Chucky","Chyna","Cinder","Cindy","Cinnamon","Cisco","Claire","Clancy","Cleo","Cleopatra","Clicker","Clifford","Clover","Clyde","Coal","Cobweb","Coco","Cocoa","Coconut","Codi","Cody","Cole","Comet","Commando","Conan","Connor","Cookie","Cooper","Copper","Corky","Cosmo","Cotton","Cozmo","Crackers","Cricket","Crystal","Cubby","Cubs","Cujo","Cupcake","Curly","Curry","Cutie","Cutie-pie","Cyrus","Daffy","Daisey-mae","Daisy","Dakota","Dallas","Dandy","Dante","Daphne","Darby","Darcy"," ","Darwin","Dash","Dave","Deacon","Dee","Dee Dee","Dempsey","Destini","Dewey","Dexter","Dharma","Diamond","Dickens","Diego","Diesel","Digger","Dillon","Dinky","Dino","Diva","Dixie","Dobie","Doc","Dodger","Doggonâ€™","Dolly","Domino","Doodles","Doogie","Dots","Dottie","Dozer","Dragster","Dreamer","Duchess","Dude","Dudley","Duffy","Duke","Duncan","Dunn","Dusty","Dutches","Dutchess","Dylan","Earl","Ebony","Echo","Eddie","Eddy","Edgar","Edsel","Eifel","Einstein","Ellie","Elliot","Elmo","Elvis","Elwood","Ember","Emily","Emma","Emmy","Erin","Ernie","Eva","Faith","Fancy","Felix","Fergie","Ferris","Fido","Fifi","Figaro","Finnegan","Fiona","Flake","Flakey","Flash","Flint","Flopsy","Flower","Floyd","Fluffy","Fonzie","Foxy","Francais","Frankie","Franky","Freckles","Fred","Freddie","Freddy","Freedom","Freeway","Fresier","Friday","Frisco","Frisky","Fritz","Frodo","Frosty","Furball","Fuzzy","Gabby","Gabriella","Garfield","Gasby","Gator","Gavin","Genie","George","Georgia","Georgie","Giant","Gibson","Gidget","Gigi","Gilbert","Gilda","Ginger","Ginny","Girl","Gizmo","Godiva","Goldie","Goober","Goose","Gordon","Grace","Grace","Gracie","Gracie","Grady","Greenie","Greta","Gretchen","Gretel","Gretta","Griffen","Gringo","Grizzly","Gromit","Grover","Gucci","Guido","Guinness","Gunner","Gunther","Gus","Guy","Gypsy","Hailey","Haley","Hallie","Hamlet","Hammer","Hank","Hanna","Hannah","Hans","Happyt","Hardy","Harley","Harpo","Harrison","Harry","Harvey","Heather","Heidi","Henry","Hercules","Hershey","Higgins","Hobbes","Holly","Homer","Honey","Honey-bear","Hooch","Hoover","Hope","Houdini","Howie","Hudson","Huey","Hugh","Hugo","Humphrey","Hunter","India","Indy","Iris","Isabella","Isabelle","Itsy","Itsy-bitsy","Ivory","Ivy","Izzy","Jack","Jackie","Jackpot","Jackson","Jade","Jagger","Jags","Jaguar","Jake","Jamie","Jasmine","Jasper","Jaxson","Jazmie","Jazz","Jelly","Jelly-bean","Jenna","Jenny","Jerry","Jersey","Jess","Jesse","Jesse James","Jessie","Jester","Jet","Jethro","Jett","Jetta","Jewel","Jewels","Jimmuy","Jingles","Jj","Joe","Joey","Johnny","Jojo","Joker","Jolie","Jolly","Jordan","Josie","Joy","Jr","Judy","Julius","June","Junior","Justice","Kali","Kallie","Kane","Karma","Kasey","Katie","Kato","Katz","Kayla","Kc","Keesha","Kellie","Kelly","Kelsey","Kenya","Kerry","Kibbles","Kid","Kiki","Killian","King","Kipper","Kira","Kirby","Kismet","Kissy","Kitty","Kiwi","Klaus","Koba","Kobe","Koda","Koko","Kona","Kosmo","Koty","Kramer","Kujo","Kurly","Kyra","Lacey","Laddie","Lady","Ladybug","Laney","Lassie","Latte","Layla","Lazarus","Lefty","Leo","Levi","Lexi","Lexie","Lexus","Libby","Lightning","Lili","Lilly","Lily","Lincoln","Linus","Little Bit","Little-guy","Little-one","Little-rascal","Lizzy","Logan","Loki","Lola","Lou","Louie","Louis","Lovey","Lucas","Luci","Lucifer","Lucky","Lucy","Luke","Lulu","Luna","Lynx","Mac","Macho","Macintosh","Mack","Mackenzie","Macy","Maddie","Maddy","Madison","Maggie","Maggie-mae","Maggie-moo","Maggy","Magic","Magnolia","Major","Mandi","Mandy","Mango","Marble","Mariah","Marley","Mary","Mary Jane","Mason","Mattie","Maverick","Max","Maximus","Maxine","Maxwell","May","Maya","Mcduff","Mckenzie","Meadow","Megan","Meggie","Mercedes","Mercle","Merlin","Mia","Miasy","Michael","Mickey","Midnight","Mikey","Miko","Miles","Miller","Millie","Milo","Mimi","Mindy","Ming","Mini","Minnie","Mischief","Misha","Miss Kitty","Miss Priss","Missie","Missy","Mister","Misty","Mitch","Mittens","Mitzi","Mitzy","Mo","Mocha","Mojo","Mollie","Molly","Mona","Monkey","Monster","Montana","Montgomery","Monty","Moocher","Moochie","Mookie","Moonshine","Moose","Morgan","Moses","Mouse","Mr Kitty","Muffin","Muffy","Mugsy","Mulligan","Munchkin","Murphy","Nakita","Nala","Nana","Napoleon","Natasha","Nathan","Nellie","Nemo","Nena","Nero","Nestle","Newt","Newton","Nibbles","Nibby","Nibby-nose","Nick","Nickers","Nickie","Nicky","Nico","Nike","Niki","Nikita","Nikki","Niko","Nina","Nitro","Nobel","Noel","Nona","Noodles","Norton","Nosey","Nugget","Nutmeg","Oakley","Obie","Odie","Old Glory","Olive","Oliver","Olivia","Ollie","Onie","Onyx","Opie","Oreo","Oscar","Otis","Otto","Oz","Ozzie","Ozzy","Pablo","Paco","Paddington","Paddy","Panda","Pandora","Panther","Papa","Paris","Parker","Pasha","Patch","Patches","Patricky","Patsy","Patty","Peaches","Peanut","Peanuts","Pearl","Pebbles","Pedro","Penny","Pepe","Pepper","Peppy","Pepsi","Persy","Pete","Peter","Petey","Petie","Phantom","Phoebe","Phoenix","Picasso","Pickles","Pierre","Piggy","Piglet","Pink Panther","Pinky","Pinto","Piper","Pippin","Pippy","Pip-squeek","Pirate","Pixie","Plato","Pluto","Pockets","Pogo","Pokey","Polly","Poncho","Pongo","Pooch","Poochie","Pooh","Pooh-bear","Pookie","Pooky","Popcorn","Poppy","Porche","Porkchop","Porky","Porter","Powder","Prancer","Precious","Presley","Pretty","Pretty-girl","Prince","Princess","Prissy","Puck","Puddles","Pudge","Puffy","Pugsley","Pumpkin","Punkin","Puppy","Purdy","Queen","Queenie","Quincy","Quinn","Rags","Raison","Ralph","Ralphie","Rambler","Rambo","Ranger","Rascal","Raven","Rebel","Red","Reggie","Reilly","Remy","Rex","Rexy","Rhett","Ricky","Rico","Riggs","Riley","Rin Tin Tin","Ringo","Ripley","Rocco","Rock","Rocket","Rocko","Rocky","Roland","Rolex","Rollie","Roman","Romeo","Rosa","Roscoe","Rosebud","Rosie","Rosy","Rover","Rowdy","Roxanne","Roxie","Roxy","Ruby","Ruchus","Rudy","Ruffe","Ruffer","Ruffles","Rufus","Ruger","Rusty","Ruthie","Ryder","Sabine","Sable","Sabrina","Sadie","Sage","Sailor","Salem","Sally","Salty","Sam","Samantha","Sammy","Sampson","Samson","Sandy","Sara","Sarah","Sarge","Sasha","Sassie","Sassy","Savannah","Sawyer","Scarlett","Schotzie","Schultz","Scoobie","Scooby","Scooby-doo","Scooter","Scottie","Scout","Scrappy","Scruffy","Sebastian","Shadow","Shady","Shaggy","Shasta","Sheba","Sheena","Shelby","Shelly","Sherman","Shiloh","Shiner","Shorty","Sienna","Sierra","Silky","Silver","Silvester","Simba","Simon","Simone","Sissy","Skeeter","Skinny","Skip","Skipper","Skippy","Skittles","Sky","Skye","Skyler","Slick","Slinky","Sly","Smarty","Smoke","Smokey","Smudge","Sneakers","Snickers","Snoop","Snoopy","Snowball","Snowflake","Snowy","Snuffles","Snuggles","Solomon","Sonny","Sophia","Sophie","Sox","Spanky","Sparkle","Sparky","Speed","Speedo","Speedy","Spencer","Spike","Spirit","Spookey","Spot","Spotty","Spud","Spunky","Squeeky","Squirt","Stanley","Star","Starr","Stella","Sterling","Stich","Stinky","Stormy","Stuart","Sugar","Sugar-baby","Summer","Sumo","Sundance","Sunday","Sunny","Sunshine","Susie","Susie-q","Suzy","Sweetie","Sweetie-pie","Sweet-pea","Sydney","Tabby","Tabetha","Taco","Taffy","Tally","Tammy","Tangles","Tango","Tank","Tanner","Tara","Tasha","Taylor","Taz","T-bird","T-bone","Teddy","Teddy-bear","Tequila","Tess","Tessa","Tessie","Tex","Thelma","Thor","Thumper","Thunder","Thyme","Tiffany","Tiger","Tigger","Tiggy","Tiki","Tilly","Timber","Timmy","Tinker","Tinker-bell","Tinky","Tiny","Tippy","Tipr","Titan","Tito","Titus","Tobie","Toby","Toffee","Tom","Tommy","Tommy-boy","Toni","Tony","Toots","Tootsie","Topaz","Tori","Toto","Tracker","Tramp","Trapper","Travis","Trigger","Trinity","Tripod","Tristan","Trixie","Trooper","Trouble","Troy","Truffles","Tuck","Tucker","Tuesday","Tuffy","Turbo","Turner","Tux","Twiggy","Twinkle","Ty","Tyler","Tyson","Valinto","Vava","Vegas","Velvet","Vinnie","Vinny","Violet","Vito","Volvo","Waddles","Wags","Waldo","Wallace","Wally","Walter","Wayne","Weaver","Webster","Wesley","Westie","Whiskers","Whiskey","Whispy","Whitie","Whiz","Wiggles","Wilber","Willie","Willow","Willy","Wilson","Winnie","Winston","Winter","Wiz","Wizard","Wolfgang","Wolfie","Woody","Woofie","Wrigley","Wrinkles","Wyatt","Xena","Yaka","Yang","Yeller","Yellow","Yin","Yoda","Yogi","Yogi-bear","Yukon","Zack","Zeke","Zena","Zeus","Ziggy","Zippy","Zoe","Zoey","Zoie","Zorro"];
let vetNames = ["Cynthia Truska", "John Truska", "Shawn Smith", "Julie Hammond", "Christopher Wright"];

    function petSQL(table, pet){
        return "INSERT INTO " + table + " VALUES(NULL, " + pet["sql"].join(", ") + ");<br>";
    }
    function arraySQL(table, data){
        return "INSERT INTO " + table + " VALUES(NULL, " + data.join(", ") + ");<br>";
    }
    function rand(array){
        return array[Math.floor(Math.random()*array.length)];
    }
    function randInt(a,b){
        return Math.floor(Math.random()*b)+a;
    }
    function randFloat(a,b){
        return Math.random()*b+a;
    }
    function q(str){
        return "\""+str+"\"";
    }
    function gender(){
        return rand(["M", "F"]);
    }
    function tf(){
        return rand(["TRUE","FALSE"]);
    }
    function twoDigits(num){
        let str = ""+num;
        if(str.length == 1){
            return "0"+str;
        }
        else{
            return str;
        }
    }
    function randomDate(days){
        return new Date(new Date() - Math.floor(Math.random() * days * (1000 * 3600 * 24)));
    }
    function dateToSQL(date)
    {
        return date.getFullYear() + "-" + twoDigits(date.getMonth()+1) + "-" + twoDigits(date.getDate());
    }
    function generateCat(){
        let birth = randomDate(5840);
        return {sql:[q(rand(petNames)), q(rand(catBreeds)),q(gender()), tf(), tf(), tf(), q(dateToSQL(birth))],bday:birth};
    }
    function generateDog(){
        let birth = randomDate(5840);
        return {sql:[q(rand(petNames)), q(rand(dogBreeds)),q(gender()), tf(), tf(), tf(), q(dateToSQL(birth)), randInt(2,200)],bday:birth};
    }
    function generateExotic(){
        let birth = randomDate(5840);
        return {sql:[q(rand(petNames)), q(rand(exoticBreeds)),q(gender()), tf(), q(dateToSQL(birth))],bday:birth};
    }
    function generateOwner(){
        return {sql:[q(faker.name.firstName()), q(faker.name.lastName()), q(faker.address.streetAddress()), q((randInt(0,99)<20 ? faker.address.secondaryAddress() : "")), q(faker.address.city()),q(faker.address.stateAbbr()),q(faker.address.zipCode().split("-")[0]), "FALSE"]};
    }
    function generateNote(id, bday){
        if(bday == undefined){
            bday = randomDate(7300);
        }
        return {sql:[id, q(rand(vetNames)), q(dateToSQL(randomDate((new Date()-bday)/(1000 * 3600 * 24)))), q(faker.lorem.paragraph())]};
    }
    function generateNotes(pets){
        let numNotes = pets.length*3;
        let notes = Array(numNotes);
        for(let pos=0; pos<numNotes; pos++){
            let petNum = randInt(0,pets.length);
            notes[pos] = generateNote(petNum+1, pets[petNum]["bday"]);
        }
        return notes;
    }

    function shuffle(a) {
        for (let i = a.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [a[i], a[j]] = [a[j], a[i]];
        }
        return a;
    }

    function petArrayCreator(catL, dogL, exoticL){
        let allPets = Array();
        for(let i=0; i<catL; i++){
            allPets.push(Array("cat",i+1));
        }
        for(let i=0; i<dogL; i++){
            allPets.push(Array("dog",i+1));
        }
        for(let i=0; i<exoticL; i++){
            allPets.push(Array("exotic",i+1));
        }
        return shuffle(allPets);
    }

    function generateOwnerPetRelationships(ownerL,catL,dogL,exoticL){
        let catRelationships = Array();
        let dogRelationships = Array();
        let exoticRelationships = Array();
        let allPets = petArrayCreator(catL, dogL, exoticL);
        for(let i=0; i<ownerL; i++)
        {
            let pet = allPets.pop();
            switch(pet[0]){
                case "cat":
                    catRelationships.push(Array(pet[1], i+1));
                    break;
                case "dog":
                    dogRelationships.push(Array(pet[1], i+1));
                    break;
                case "exotic":
                    exoticRelationships.push(Array(pet[1], i+1));
                    break;
            }
        }
        while(allPets.length > 0){
            let pet = allPets.pop();
            let r = randInt(0, ownerL);
            switch(pet[0]){
                case "cat":
                    catRelationships.push(Array(pet[1], r+1));
                    break;
                case "dog":
                    dogRelationships.push(Array(pet[1], r+1));
                    break;
                case "exotic":
                    exoticRelationships.push(Array(pet[1], r+1));
                    break;
            }
        }
        let relationships = {cats:catRelationships,dogs:dogRelationships,exotics: exoticRelationships}
        return relationships;
    }

    function generate(generator, num){
        let arr = Array();
        for(let pos = 0; pos<num; pos++){
            arr[pos] = generator();
        }
        return arr;
    }
    $(document).ready( function(){\
        /*
            let code = "";
            let cats = generate(generateCat, 2000);
            let dogs = generate(generateDog, 2000);
            let exotics = generate(generateExotic, 1000);
            let owners = generate(generateOwner,3333);
            let catNotes = generateNotes(cats);
            let dogNotes = generateNotes(dogs);
            let exoticNotes = generateNotes(exotics);
            let ownerNotes = generateNotes(owners);
            let relationships = generateOwnerPetRelationships(owners.length,cats.length, dogs.length, exotics.length);
            let catOwners = relationships["cats"];
            let dogOwners = relationships["dogs"];
            let exoticOwners = relationships["exotics"];

            for(cat of cats){
                code += petSQL("cats", cat);
            }
            for(dog of dogs){
                code += petSQL("dogs", dog);
            }
            for(exotic of exotics){
                code += petSQL("exotics", exotic);
            }
            for(owner of owners){
                code += petSQL("owners", owner);
            }
            for(note of catNotes){
                code += petSQL("catNotes", note);
            }
            for(note of dogNotes){
                code += petSQL("dogNotes", note);
            }
            for(note of exoticNotes){
                code += petSQL("exoticNotes", note);
            }
            for(note of ownerNotes){
                code += petSQL("ownerNotes", note);
            }
            for(rel of catOwners){
                code += arraySQL("catsOwners", rel);
            }
            for(rel of dogOwners){
                code += arraySQL("dogsOwners", rel);
            }
            for(rel of exoticOwners){
                code += arraySQL("exoticsOwners", rel);
            }

            $("body").html(code);*/
    });


</script>
</head>
<body>

</body>

<?php
global $db;
$q = $db->prepare('SELECT owners.id, owners.fname, owners.lname FROM owners');
$q->execute();
$q->store_result();

$data = array();

$q->bind_result($id, $fname, $lname);
while (mysqli_stmt_fetch($q)){
    $uname = ($fname[0].$lname);
    $pass = password_hash(strrev($fname[0].$lname), PASSWORD_BCRYPT);
    echo 'INSERT INTO users VALUES (NULL, "'.$uname.'", "'.$pass.'", 2, '.$id.');<br>';
}



?>

