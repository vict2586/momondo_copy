<?php
    $languages_allowed = ['en', 'dk'];

    // gets the language form the addressbar
    // if the user select a language other than english display that, if not display english
    $language = $_GET['language'] ?? 'en';

    // if the user sets a language that is not in the allowed array, change it back to english
    if( ! in_array($language, $languages_allowed) ){
        $language = 'en';
    }

    $Global_dictionary=[
        'en_dansk'=>'Dansk',
        'dk_dansk'=>'English',
        'en_indexFormF'=>'From',
        'dk_indexFormF'=>'Fra',
        'en_indexFormT'=>'To',
        'dk_indexFormT'=>'Til',
        'en_search'=>'Search',
        'dk_search'=>'Søg',
        'en_carruselOpen'=>'Open',
        'dk_carruselOpen'=>'Åbent',
        'en_minCards1'=>'Trending cities',
        'dk_minCards1'=>'Populære byer',
        'en_minCards2'=>'Trending countries',
        'dk_minCards2'=>'Populære lande',
        'en_dansk'=>'Dansk',
        'dk_dansk'=>'English',
        'en_delete'=>'Delete',
        'dk_delete'=>'Slet',
    ];

    $FrontPage_dictionary=[
        'en_flyTo'=>'Fly to',
        'dk_flyTo'=>'Flyv til',
        'en_wellcome'=>'Welcome! Find a flexible flight for your next trip.',
        'dk_wellcome'=>'Velkommen! Find en fleksibel flybillet til din næste rejse.',
        'en_why'=>'Here’s why travellers choose momondo',
        'dk_why'=>'Derfor vælger rejsende momondo',
        'en_whyBox1'=>'Best travel deals',
        'dk_whyBox1'=>'De bedste rejsetilbud ',
        'en_whyBox2'=>'Book with flexibility',
        'dk_whyBox2'=>'Bestil med fleksibilitet',
        'en_whyBox3'=>'Travel with less CO₂',
        'dk_whyBox3'=>'Rejs med mindre CO₂',
        'en_whyBox4'=>'Trusted and free',
        'dk_whyBox4'=>'Anbefales af eksperter',
        'en_whyBox11'=>'Find the best deals available from 900+ travel sites.',
        'dk_whyBox11'=>'Find de bedste tilbud på mere end 900 forskellige rejsesites.',
        'en_whyBox22'=>'Easily find flights with no change fees.',
        'dk_whyBox22'=>'Find nemt fly uden ændringsgebyrer.',
        'en_whyBox33'=>'See the environmental impact of the travel options.',
        'dk_whyBox33'=>'Se rejsemulighedernes miljømæssige påvirkning.',
        'en_whyBox44'=>'momondo-appen is Editor’s Choice i App Store.',
        'dk_whyBox44'=>'momondo-appen er Redaktørens valg i App Store.',
        'en_card'=>'Fantastic September destinations',
        'dk_card'=>'Fantastiske september destinationer',
        'en_cardT'=>'Didn’t get to go on vacation over the summer? September is actually a wonderful time to take an impromptu trip with still good weather but fewer tourists and lower prices',
        'dk_cardT'=>'Nåede du ikke at komme på ferie over sommeren? September er faktisk en vidunderlig tid at tage en improviseret tur med stadig godt vejr, men færre turister og lavere priser',
        'en_cardB'=>'Read more',
        'dk_cardB'=>'Læs atiklen',
        'en_carrusel1T'=>'Destinations you can travel to now',
        'dk_carrusel1T'=>'Destinationer, du kan rejse til nu',
        'en_carrusel1t'=>'Popular destinations open to most visitors from Denmark',
        'dk_carrusel1t'=>'Populære destinationer, som er åbne for de fleste besøgende fra Danmark',
        'en_carrusel1B'=>'Show all',
        'dk_carrusel1B'=>'Vis alle',
        'en_carrusel11'=>'Vaccinated travellers can visit',
        'dk_carrusel11'=>'Vaccinerede rejsende kan komme på besøg',
        'en_carrusel12'=>'Masks required',
        'dk_carrusel12'=>'Mundbind er påkrævet',
        'en_carrusel2T'=>'Find the best flight',
        'dk_carrusel2T'=>'Find det bedste fly',
        'en_carrusel2t'=>'Get help and guidance to find the flight ticket that best suits your needs',
        'dk_carrusel2t'=>'Få hjælp og vejledning til at finde den flybillet der passer bedst til dine behov',
        'en_carrusel21'=>'Start planning your autumn holiday',
        'dk_carrusel21'=>'Kom i gang med at planlægge din efterårsferie',
        'en_carrusel22'=>'Find inspiration for family-friendly destinations in our guide',
        'dk_carrusel22'=>'Find inspiration til familievenlige destinationer i vores guide',
        'en_carrusel3T'=>'Travel inspiration',
        'dk_carrusel3T'=>'Rejseinspiration',
        'en_carrusel3t'=>'Our latest travel tips, expert hacks and industry insights to help make your journey one to remember',
        'dk_carrusel3t'=>'Vores nyeste rejseinspiration og eksperttips hjælper dig med at gøre din rejse uforglemmelig',
        'en_carrusel3B'=>'More inspiration',
        'dk_carrusel3B'=>'Mere inspiration',
        'en_carrusel31'=>'Everything you need to know about road trips with your dog',
        'dk_carrusel31'=>'Alt du behøver at vide om biltur med hunden',
        'en_carrusel32'=>'Sep. 14, 2022 - 6 min.',
        'dk_carrusel32'=>'Sep. 14, 2022 - 6 min.',
        'en_flytilbudT'=>'Flight deals by destination',
        'dk_flytilbudT'=>'Flytilbud sorteret efter destination',
        'en_flytilbudt'=>'Find and compare cheap flights',
        'dk_flytilbudt'=>'Find og sammenlign billige flybilletter',
        'en_flytilbudtt'=>'We search and compare billions of real-time prices on plane tickets so you can easily find the cheapest, quickest, and best flight deals for you.',
        'dk_flytilbudtt'=>'Vi søger og sammenligner milliarder af priser på flybilletter i realtid, så du nemt kan finde de billigste, hurtigste og bedste flytilbud for dig.',
        'en_flybilletterT'=>'How to find cheap flight deals with momondo',
        'dk_flybilletterT'=>'Sådan finder du de bedste tilbud på flybilletter med momondo'
    ];

    $Overnatning_dictionary=[
        'en_hotelsIn'=>'Hotels in',
        'dk_hotelsIn'=>'Hotellet i',
        'en_wellcome'=>'Book a stay with free cancellation',
        'dk_wellcome'=>'Book en overnatning med gratis afbestilling',
        'en_why'=>'Here’s why travellers choose momondo',
        'dk_why'=>'Derfor vælger rejsende momondo',
        'en_carrusel1T'=>'Stays near you',
        'dk_carrusel1T'=>'Overnatning i nærheden af dig',
        'en_carrusel1t'=>'sat. 17 Sep - son. 18 Sep',
        'dk_carrusel1t'=>'lør. 17. sep. – søn. 18. sep.',
        'en_carrusel2T'=>'Favourite hotels around the globe',
        'dk_carrusel2T'=>'Udforsk en række forskellige overnatningssteder',
        'en_carrusel2t'=>'Aarhus • sat. 17 Sep - son. 18 Sep',
        'dk_carrusel2t'=>'Aarhus • lør. 17. sep. – søn. 18. sep.',
        'en_carrusel4T'=>'Find the best stay',
        'dk_carrusel4T'=>'Find det bedste ophold',
        'en_carrusel4t'=>'Make your next stay unforgettable with fresh holiday inspiration and travel guides.',
        'dk_carrusel4t'=>'Gør dit næste ophold uforglemmelig med frisk ferieinspiration og rejseguides.',
        'en_carrusel41'=>'Alternative destinations: cheaper and just as beautiful',
        'dk_carrusel41'=>'Alternative destinationer: billigere og ligeså skønt',
        'en_carrusel411'=>'Prices go up fast. See the places that have what you want at lower prices',
        'dk_carrusel411'=>'Priserne tager hurtigt fart. Se de steder, der har det, du ønsker til lavere priser',
        'en_carrusel5T'=>'Green hotels in Denmark',
        'dk_carrusel5T'=>'Grønne hoteller i Danmark',
        'en_carrusel5t'=>'These have been voted the most environmentally friendly - in each of their regions',
        'dk_carrusel5t'=>'Disse er kåret til de mest miljøvenlige - i hver deres region',
        'en_minCards1t'=>'The most searched for cities on momondo',
        'dk_minCards1t'=>'Brug momondo til at finde et hotelophold blandt vores mest søgte destinationer',
        'en_minCards2t'=>'The most sought after holiday homes & apartment destinations on momondo',
        'dk_minCards2t'=>'Brug momondo til at finde ferieboliger blandt vores mest søgte destinationer',
        'en_dropDownT'=>'Holiday Rentals & Stays',
        'dk_dropDownT'=>'Ferieboliger og overnatningssteder',
        'en_dropDownt'=>'Compare Deals on Hotels, Holiday Apartments & Home Rentals',
        'dk_dropDownt'=>'Sammenlign tilbud på hoteller, ferielejligheder og -boliger',
        'en_dropDowntt'=>'From vacation homes and apartments to more traditional hotels, find and compare the best places to stay worldwide with momondo',
        'dk_dropDowntt'=>'Alt fra ferieboliger og -lejligheder til mere traditionelle hoteller. Med momondo kan du finde og sammenligne de bedste steder at bo i hele verden'
    ];

    $Fearger_dictionary=[
        'en_hotelsIn'=>'Car rental in',
        'dk_hotelsIn'=>'Billeje i',
        'en_wellcome'=>'Find cheap ferry tickets worldwide.',
        'dk_wellcome'=>'Find billige færgebilletter i hele verden.',
        'en_card'=>'Ferries',
        'dk_card'=>'Færger',
        'en_cardT'=>'Find cheap ferry tickets',
        'dk_cardT'=>'Find billige færgebilletter'
    ];

    $Profile_dictionary=[
        'en_wellcome'=>'Wellcome back',
        'dk_wellcome'=>'Velkommen tilbage',
        'en_flights'=>'Here are your saved flights',
        'dk_flights'=>'Her er dine gemte flyrejser'
    ];

    $Pakkerejser_dictionary=[
        'en_hotelsIn'=>'Holidays in',
        'dk_hotelsIn'=>'Ferier i',
        'en_wellcome'=>'Search and compare package holidays',
        'dk_wellcome'=>'Søg og sammenlign pakkerejser',
        'en_card'=>'This is where the trip will go in July',
        'dk_card'=>'Her skal turen gå til i Juli',
        'en_cardT'=>'Whether you want to turn up the heat, enjoy a cooler side of summer, are interested in the best festivals in July or fancy a staycation, see here where to go.',
        'dk_cardT'=>'Uanset om du ønsker at skrue helt op for varmen, nyde en køligere side af sommeren, er interesseret i de bedste festivaler i juli eller har lyst til en staycation, så se her, hvor du skal hen.',
        'en_cardB'=>'Read more',
        'dk_cardB'=>'Læs mere',
        'en_TipT'=>'Tips and tricks for finding package holidays',
        'dk_TipT'=>'Tips og tricks til at finde pakkerejser',
        'en_Box1T'=>'Why book a package holiday instead of separate flights and hotels?',
        'dk_Box1T'=>'Book en pakkerejse, der inkluderer både fly og hotel.',
        'en_Box1t'=>'With momondo’s package holidays, you don’t need to worry about booking everything separately, because flights and accommodation are included in the price, often saving you money. Package holidays may also include additional extras such as transfers to help your holiday go as smoothly as possible.',
        'dk_Box1t'=>'Med momondos søgemaskine kan du finde pakkerejser, så du ikke behøver at bekymre dig om at booke alt hver for sig, da fly og hotel er inkluderet i prisen, hvilket kan gøre rejsen billigere for dig. Du kan også bruge momondo til specifikt at søge på charterrejser arrangeret af populære og velkendte rejseselskaber. Med en charterrejse får du også fly og hotel med i prisen, ligesom der vil være mulighed for at tilkøbe transport til og fra lufthavnen, så du ikke skal tænke over, hvordan du kommer frem og tilbage.',
        'en_Box2T'=>'Book your package holiday with peace of mind.',
        'dk_Box2T'=>'Book din charterrejse med ro i sindet.',
        'en_Box2t'=>'By booking a package deal through momondo’s package holiday partners, you can rely on a single company to take care of your holiday experience from beginning to end. Many tour operators provide in-resort staff to provide local assistance and travel advice whenever needed ‒ helping you get the most out of your holiday.',
        'dk_Box2t'=>'Ved at booke en charterrejse gennem momondos partnere kan du stole på, at et rejsebureau håndterer din ferie fra start til slut. Med en charterrejse kan du også forvente, at rejseselskabet har guider på destinationen, og de står klar til at hjælpe, hvis der skulle opstå uheld, eller hvis du blot ønsker gode rejsetips. Med guidernes ekspertise kan du få mest muligt ud af din charterrejse, uanset om du rejser forår, sommer, efterår eller vinter. Når du tager på en charterrejse, skal du desuden vælge den form for indkvartering, du ønsker - såsom halv- og helpension eller all inclusive - der dækker over, hvor mange måltider, drikkevarer og/eller andre ydelser, der er inkluderet i den samlede pris. Mange børnefamilier værdsætter all inclusive-charterrejser, da det fjerner de fleste praktiske bekymringer, man som forælder måtte have på ferien.',
        'en_Box3T'=>'Find your holiday easier, faster and at the best price.',
        'dk_Box3T'=>'Find en billig rejse nemt og hurtigt.',
        'en_Box3t'=>'Booking a holiday package deal is a great option if you want to make your trip planning easier, faster and hassle-free. Not only could you save money on your next trip by finding a great package deal, but you’ll also save time searching for hundreds of flight and hotel combinations. Tour operators often have access to great deals on charter flights, along with hotel discounts not available to the general public.',
        'dk_Box3t'=>'At booke en charterrejse er den perfekte løsning, hvis du vil gøre din rejseplanlægning så ukompliceret som muligt. Du kan være heldig ikke kun at spare penge ved at booke en charterrejse - du kan også spare tid ved ikke selv at skulle søge og sammenligne hundredvis af fly- og hotelkombinationer. Du kan forvente at finde alle de klassiske og populære destinationer såsom Spanien og Grækenland, men også eksotiske destinationer som f.eks. Thailand.',
        'en_Box4T'=>'Pick a holiday tailored to your specific needs.',
        'dk_Box4T'=>'Vælg en ferie, der er skræddersyet til dine ønsker.',
        'en_Box4t'=>'Since no holiday is the same for everyone, you can quickly and easily filter your package deal choices according to what’s most important to you on your holiday. From price and review scores to amenities such as airport transfer and meals, finding the right package deal for your holiday is in your hands.',
        'dk_Box4t'=>'Eftersom ingen ferie er den samme for alle, kan du hurtigt og nemt tilpasse rejsesøgningen for at finde den ferie, der passer bedst til dine behov. Skal rejsen vare 10 eller 14 dage, skal det være all inclusive, er det med eller uden børn og vil du helst have lufthavnstransport inkluderet eller klare kørsel på egen hånd? At finde en billig rejse er hurtigt og enkelt når du søger pakkerejser på momondo.',
        'en_Box5T'=>'Book your package holiday in advance or last-minute ‒ it’s your choice.',
        'dk_Box5T'=>'Spar penge ved at købe en afbudsrejse.',
        'en_Box5t'=>'If you’re planning your holiday in advance, some tour operators offer early booking discounts to help you get ahead of the summer holiday crowds. Alternatively, it’s never too late to find a package deal, even if you’re waiting until the last minute to decide where you want to go. From five-star luxury hotel stays in exotic places to modest bed and breakfasts in the countryside – there are hundreds of affordable last-minute holiday deals to fit any budget.',
        'dk_Box5t'=>'Er du fleksibel med dine rejseplaner kan der være store besparelser at hente ved at rejse i sidste øjeblik. Rejseselskaber taber penge på de rejser, de ikke får solgt, og derfor sænker de prisen på deres pakkerejser i sidste øjeblik. På den måde kan de sikre sig at komme af med rejsen, og du kan købe en billig ferie her og nu. Med afbudsrejser kan du finde alt fra femstjernede luksushoteller i eksotiske destinationer til hyggelige og mere beskedne hoteller i syden - der er hundredvis af billige afbudsrejser, der passer til de flestes budgetter.'
    ];

    $flight_result_dictionary=[
        'en_advice'=>'Our advice',
        'dk_advice'=>'Vores råd',
        'en_data'=>'We’re still gathering data for this route',
        'dk_data'=>'Vi indsamler stadig data for denne rute',
        'en_price'=>'Price Alert',
        'dk_price'=>'Prisagent',
    ];

    $Random_dictionary=[
        'en_lastName'=>'Last name',
        'dk_lastName'=>'Efternavn',
        'en_image'=>'Uploade an image',
        'dk_image'=>'Uploade et billede'
    ];
