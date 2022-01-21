$(function(){
  var currencies = [
    { value: 'Toyota 4 Runner', data: '' },
    { value: 'Toyota 86', data: 'to86' },
    { value: 'Toyota Alphard', data: '' },
    { value: 'Toyota Aurion', data: '' },
    { value: 'Toyota Aygo', data: '' },
    { value: 'Toyota Cami', data: '' },
    { value: 'Toyota Celica', data: '' },
    { value: 'Toyota Corolla', data: '' },
    { value: 'Toyota Cressida', data: '' },
    { value: 'Toyota Estima', data: '' },
    { value: 'Toyota Hiace Động cơ dầu', data: 'tohiaceDau' },
    { value: 'Toyota Hiace Động cơ xăng', data: 'tohiaceXang' },
    { value: 'Toyota Innova 2.0E', data: 'toinnovaE' },
    { value: 'Toyota Innova 2.0G', data: 'toinnovaG' },
    { value: 'Toyota Innova 2.0V', data: 'toinnovaV' },
    { value: 'Toyota Land Cruiser Prado', data: 'toLCPrado' },
    { value: 'Toyota Land Cruiser VX', data: 'toLCVX' },
    { value: 'Toyota Altezza', data: '' },
    { value: 'Toyota Avalon', data: '' },
    { value: 'Toyota Brevis', data: '' },
    { value: 'Toyota Camry 2.5Q', data: 'tocamry25Q' },
    { value: 'Toyota Camry 2.5G', data: 'tocamry25G' },
    { value: 'Toyota Camry 2.0E', data: 'tocamry20E' },
    { value: 'Toyota Century', data: '' },
    { value: 'Toyota Corolla Altis 1.8G MT', data: 'toaltis18g' },
    { value: 'Toyota Corolla Altis 1.8G CVT', data: 'toaltis18gCVT' },
    { value: 'Toyota Corolla Altis 2.0V CVT-i', data: 'toaltis20V' },
    { value: 'Toyota Cresta', data: '' },
    { value: 'Toyota Fj Cruiser', data: '' },
    { value: 'Toyota Highlander', data: '' },
    { value: 'Toyota Ipsum', data: '' },
    { value: 'Toyota Liteace', data: '' },
    { value: 'Toyota Matrix', data: '' },
    { value: 'Toyota Allion', data: '' },
    { value: 'Toyota Aristo', data: '' },
    { value: 'Toyota Avensis', data: '' },
    { value: 'Toyota Caldina', data: '' },
    { value: 'Toyota Carina', data: '' },
    { value: 'Toyota Chaser', data: '' },
    { value: 'Toyota Corona', data: '' },
    { value: 'Toyota Crown', data: '' },
    { value: 'Toyota Fortuner 2.5G (4×2)', data: 'tofor25G' },
    { value: 'Toyota Fortuner 2.7V (4×2)', data: 'tofor27V' },
    { value: 'Toyota Fortuner 2.7V (4×4)', data: 'tofor27V4' },
    { value: 'Toyota Fortuner TRD 2.7V (4×2)', data: 'toforTRD27V' },
    { value: 'Toyota Fortuner TRD 2.7V (4×4)', data: 'toforTRD27V4' },
    { value: 'Toyota Hilux 2.4E 4x2 MT', data: 'tohilux25E' },
    { value: 'Toyota Hilux 2.8G 4x4 MT', data: 'tohilux30GMT' },
    { value: 'Toyota Hilux 2.8G 4x4 AT', data: 'tohilux30GAT' },
    { value: 'Toyota Hilux 3.0G 4x4 MT', data: 'tohilux30GMT' },
    { value: 'Toyota Hilux 3.0G 4x4 AT', data: 'tohilux30GAT' },
    { value: 'Toyota IQ', data: '' },
    { value: 'Toyota Mark II', data: '' },
    { value: 'Toyota Mega Cruiser', data: '' },
    { value: 'Toyota Platz', data: '' },
    { value: 'Toyota Prius', data: '' },
    { value: 'Toyota Rav4', data: '' },
    { value: 'Toyota Sienna', data: '' },
    { value: 'Toyota Startlet', data: '' },
    { value: 'Toyota Tercel', data: '' },
    { value: 'Toyota Venza', data: '' },
    { value: 'Toyota Vista', data: '' },
    { value: 'Toyota Yaris E CVT', data: 'toyarisE' },
    { value: 'Toyota Yaris G CVT', data: 'toyarisG' },
    { value: 'Toyota MR 2', data: '' },
    { value: 'Toyota Prado', data: '' },
    { value: 'Toyota Progres', data: '' },
    { value: 'Toyota Sequoia', data: '' },
    { value: 'Toyota Soarer', data: '' },
    { value: 'Toyota Supra', data: '' },
    { value: 'Toyota Townace', data: '' },
    { value: 'Toyota Verossa', data: '' },
    { value: 'Toyota Picnic', data: '' },
    { value: 'Toyota Previa', data: '' },
    { value: 'Toyota Raum', data: '' },
    { value: 'Toyota Sera', data: '' },
    { value: 'Toyota Solara', data: '' },
    { value: 'Toyota Tacoma', data: '' },
    { value: 'Toyota Tundra', data: '' },
    { value: 'Toyota Vios 1.5E MT', data: 'toviosE' },
    { value: 'Toyota Vios 1.5G CVT', data: 'toviosG' },
    { value: 'Toyota Vios 1.5E CVT', data: 'toviosK' },
    { value: 'Toyota XA', data: '' },
    { value: 'Toyota Zace', data: '' },
    { value: 'Acura CL', data: '' },
    { value: 'Acura EL', data: '' },
    { value: 'Acura ILX', data: '' },
    { value: 'Acura Intergra', data: '' },
    { value: 'Acura Legend', data: '' },
    { value: 'Acura MDX', data: '' },
    { value: 'Acura RDX', data: '' },
    { value: 'Acura RL', data: '' },
    { value: 'Acura TL', data: '' },
    { value: 'Acura TSX', data: '' },
    { value: 'Acura Vigor', data: '' },
    { value: 'Audi 100', data: '' },
    { value: 'Audi 80', data: '' },
    { value: 'Audi 200', data: '' },
    { value: 'Audi 90', data: '' },
    { value: 'Audi A1', data: '' },
    { value: 'Audi A2', data: '' },
    { value: 'Audi A3', data: '' },
    { value: 'Audi A4', data: '' },
    { value: 'Audi A5', data: '' },
    { value: 'Audi A6', data: '' },
    { value: 'Audi A7', data: '' },
    { value: 'Audi A8', data: '' },
    { value: 'Audi Cabriolet', data: '' },
    { value: 'Audi Coupe', data: '' },
    { value: 'Audi Q3', data: '' },
    { value: 'Audi Q5', data: '' },
    { value: 'Audi Q7', data: '' },
    { value: 'Audi Quattro', data: '' },
    { value: 'Audi TT', data: '' },
    { value: 'BMW 1 Series', data: '' },
    { value: 'BMW 2 Series', data: '' },
    { value: 'BMW 3 Series', data: '' },
    { value: 'BMW 4 Series', data: '' },
    { value: 'BMW 5 Series', data: '' },
    { value: 'BMW 6 Series', data: '' },
    { value: 'BMW 7 Series', data: '' },
    { value: 'BMW 8 Series', data: '' },
    { value: 'BMW Alpina', data: '' },
    { value: 'BMW i3', data: '' },
    { value: 'BMW i8', data: '' },
    { value: 'BMW M couper', data: '' },
    { value: 'BMW M3', data: '' },
    { value: 'BMW M4', data: '' },
    { value: 'BMW M5', data: '' },
    { value: 'BMW M6', data: '' },
    { value: 'BMW X1', data: '' },
    { value: 'BMW X2', data: '' },
    { value: 'BMW X3', data: '' },
    { value: 'BMW X4', data: '' },
    { value: 'BMW X5', data: '' },
    { value: 'BMW X6', data: '' },
    { value: 'BMW Z3', data: '' },
    { value: 'BMW Z4', data: '' },
    { value: 'BMW Z8', data: '' },
    { value: 'Chevrolet Astro', data: '' },
    { value: 'Chevrolet Aveo', data: '' },
    { value: 'Chevrolet Camaro', data: '' },
    { value: 'Chevrolet Captiva', data: '' },
    { value: 'Chevrolet Chevyvan', data: '' },
    { value: 'Chevrolet Corisica', data: '' },
    { value: 'Chevrolet Cruze', data: '' },
    { value: 'Chevrolet Express', data: '' },
    { value: 'Chevrolet Ipanema', data: '' },
    { value: 'Chevrolet Lacetti', data: '' },
    { value: 'Chevrolet Malibu', data: '' },
    { value: 'Chevrolet Prizm', data: '' },
    { value: 'Chevrolet Silverado', data: '' },
    { value: 'Chevrolet SSR', data: '' },
    { value: 'Chevrolet Tracker', data: '' },
    { value: 'Chevrolet Vivant', data: '' },
    { value: 'Chevrolet Avanlanche', data: '' },
    { value: 'Chevrolet Beretta', data: '' },
    { value: 'Chevrolet Caprice', data: '' },
    { value: 'Chevrolet Cavalier', data: '' },
    { value: 'Chevrolet Colorado', data: '' },
    { value: 'Chevrolet Corvette', data: '' },
    { value: 'Chevrolet Explorer', data: '' },
    { value: 'Chevrolet Impala', data: '' },
    { value: 'Chevrolet Kalos', data: '' },
    { value: 'Chevrolet Lumina', data: '' },
    { value: 'Chevrolet Matiz', data: '' },
    { value: 'Chevrolet Orlando', data: '' },
    { value: 'Chevrolet S10', data: '' },
    { value: 'Chevrolet Spark', data: '' },
    { value: 'Chevrolet Suburban', data: '' },
    { value: 'Chevrolet Venture', data: '' },
    { value: 'Daewoo Aranos', data: '' },
    { value: 'Daewoo Chairman', data: '' },
    { value: 'Daewoo Espero', data: '' },
    { value: 'Daewoo Gentrax', data: '' },
    { value: 'Daewoo Karando', data: '' },
    { value: 'Daewoo Lanos', data: '' },
    { value: 'Daewoo Magnus', data: '' },
    { value: 'Daewoo Nexia', data: '' },

    { value: 'Daewoo Prince', data: '' },
    { value: 'Daewoo Rezzo', data: '' },
    { value: 'Daewoo Arcadia', data: '' },
    { value: 'Daewoo Cielo', data: '' },
    { value: 'Daewoo Evanda', data: '' },
    { value: 'Daewoo Istana', data: '' },
    { value: 'Daewoo Labo', data: '' },
    { value: 'Daewoo Leganza', data: '' },
    { value: 'Daewoo Matiz', data: '' },
    { value: 'Daewoo Nubira', data: '' },
    { value: 'Daewoo Racer', data: '' },
    { value: 'Daewoo Tico', data: '' },
    { value: 'Daewoo Brougham', data: '' },
    { value: 'Daewoo Damas', data: '' },
    { value: 'Daewoo Gentra', data: '' },
    { value: 'Daewoo Kalos', data: '' },
    { value: 'Daewoo Lacetti', data: '' },
    { value: 'Daewoo Lublin', data: '' },
    { value: 'Daewoo Musso', data: '' },
    { value: 'Daewoo Musso', data: '' },
    { value: 'Daewoo Polonez', data: '' },
    { value: 'Daewoo Rexton', data: '' },
    { value: 'Daewoo Winstorm', data: '' },
    { value: 'Daihatsu Charade', data: '' },
    { value: 'Daihatsu Citivan', data: '' },
    { value: 'Daihatsu Hijet', data: '' },
    { value: 'Daihatsu Terios', data: '' },
    { value: 'Fiat 126', data: '' },
    { value: 'Fiat 500', data: '' },
    { value: 'Fiat 500', data: '' },
    { value: 'Fiat Albea', data: '' },
    { value: 'Fiat Bravo', data: '' },
    { value: 'Fiat Doblo ', data: '' },
    { value: 'Fiat Regata', data: '' },
    { value: 'Fiat Strada', data: '' },
    { value: 'Fiat Tipo', data: '' },
    { value: 'Fiat Cinquecento', data: '' },
    { value: 'Fiat Ducato', data: '' },
    { value: 'Fiat Seicento', data: '' },
    { value: 'Fiat Talento', data: '' },
    { value: 'Fiat Uno', data: '' },
    { value: 'Fiat Coupe', data: '' },
    { value: 'Fiat Panto', data: '' },
    { value: 'Fiat Siena', data: '' },
    { value: 'Fiat Tempra', data: '' },
    { value: 'Ford Acononline', data: '' },
    { value: 'Ford Bronco', data: '' },
    { value: 'Ford Cargo', data: '' },
    { value: 'Ford Courier', data: '' },
    { value: 'Ford Escape', data: '' },
    { value: 'Ford Everest', data: '' },
    { value: 'Ford F150', data: '' },
    { value: 'Ford Fiesta', data: '' },
    { value: 'Ford Focus C', data: '' },
    { value: 'Ford Max', data: '' },
    { value: 'Ford Laser', data: '' },
    { value: 'Ford Mustang', data: '' },
    { value: 'Ford Puma', data: '' },
    { value: 'Ford Taurus', data: '' },
    { value: 'Ford Wind Star', data: '' },
    { value: 'Ford Aerostar', data: '' },
    { value: 'Ford Capri', data: '' },
    { value: 'Ford Club Wagon', data: '' },
    { value: 'Ford Crown Victoria', data: '' },
    { value: 'Ford Escort', data: '' },
    { value: 'Ford Explorer', data: '' },
    { value: 'Ford F350', data: '' },
    { value: 'Ford Flex', data: '' },
    { value: 'Ford Fucion', data: '' },
    { value: 'Ford Imax', data: '' },
    { value: 'Ford Maverick', data: '' },
    { value: 'Ford Orion', data: '' },
    { value: 'Ford Ranger', data: '' },
    { value: 'Ford Tempo', data: '' },
    { value: 'Ford Aspire', data: '' },
    { value: 'Ford Caravan', data: '' },
    { value: 'Ford Contour', data: '' },
    { value: 'Ford Eco sport', data: '' },
    { value: 'Ford Edge', data: '' },
    { value: 'Ford Espedition', data: '' },
    { value: 'Ford Express', data: '' },
    { value: 'Ford F700', data: '' },
    { value: 'Ford Focus', data: '' },
    { value: 'Ford Galaxie', data: '' },
    { value: 'Ford Ka', data: '' },
    { value: 'Ford Mondeo', data: '' },
    { value: 'Ford Probe', data: '' },
    { value: 'Ford Sierra', data: '' },
    { value: 'Ford Transit', data: '' },
    { value: 'Honda Accord', data: '' },
    { value: 'Honda Concerto', data: '' },
    { value: 'Honda CR Z', data: '' },
    { value: 'Honda FIT', data: '' },
    { value: 'Honda Jazz', data: '' },
    { value: 'Honda Mobilo', data: '' },
    { value: 'Honda Passport', data: '' },
    { value: 'Honda S2000', data: '' },
    { value: 'Honda Torneo', data: '' },
    { value: 'Honda City', data: '' },
    { value: 'Honda CRV', data: '' },
    { value: 'Honda Domani', data: '' },
    { value: 'Honda Insight', data: '' },
    { value: 'Honda Legend', data: '' },
    { value: 'Honda NSX', data: '' },
    { value: 'Honda Pilot', data: '' },
    { value: 'Honda Shuttle', data: '' },
    { value: 'Honda Vigor', data: '' },
    { value: 'Honda Civic', data: '' },
    { value: 'Honda CRX', data: '' },
    { value: 'Honda Element', data: '' },
    { value: 'Honda Integra', data: '' },
    { value: 'Honda Life', data: '' },
    { value: 'Honda Odyssey', data: '' },
    { value: 'Honda Prelude', data: '' },
    { value: 'Honda Stream', data: '' },
    { value: 'Honda Z', data: '' },
    { value: 'Huyndai Azera', data: '' },
    { value: 'Huyndai Avante', data: '' },
    { value: 'Huyndai County', data: '' },
    { value: 'Huyndai Eon', data: '' },
    { value: 'Huyndai Galloper', data: '' },
    { value: 'Huyndai Gold', data: '' },
    { value: 'Huyndai H100', data: '' },
    { value: 'Huyndai i20', data: '' },
    { value: 'Huyndai Innovation', data: '' },
    { value: 'Huyndai Libero', data: '' },
    { value: 'Huyndai Pony', data: '' },
    { value: 'Huyndai Santa Fe', data: '' },
    { value: 'Huyndai Terracan', data: '' },
    { value: 'Huyndai Tucson', data: '' },
    { value: 'Huyndai Universe', data: '' },
    { value: 'Huyndai Xpress', data: '' },
    { value: 'Huyndai Luxury', data: '' },
    { value: 'Huyndai Accent', data: '' },
    { value: 'Huyndai Centennial', data: '' },
    { value: 'Huyndai Coupe', data: '' },
    { value: 'Huyndai Elantra', data: '' },
    { value: 'Huyndai Eguus', data: '' },
    { value: 'Huyndai Genesis', data: '' },
    { value: 'Huyndai Grand', data: '' },
    { value: 'Huyndai Starex', data: '' },
    { value: 'Huyndai HD', data: '' },
    { value: 'Huyndai i30', data: '' },
    { value: 'Huyndai Lantra', data: '' },
    { value: 'Huyndai Maxcruz', data: '' },
    { value: 'Huyndai Porter', data: '' },
    { value: 'Huyndai Sonata', data: '' },
    { value: 'Huyndai Tiburon', data: '' },
    { value: 'Huyndai Tuscani', data: '' },
    { value: 'Huyndai Veloster', data: '' },
    { value: 'Huyndai Verna', data: '' },
    { value: 'Huyndai XG', data: '' },
    { value: 'Huyndai Atos', data: '' },
    { value: 'Huyndai Click', data: '' },
    { value: 'Huyndai Creta', data: '' },
    { value: 'Huyndai eMighty', data: '' },
    { value: 'Huyndai Excel', data: '' },
    { value: 'Huyndai Getz', data: '' },
    { value: 'Huyndai Grandeur', data: '' },
    { value: 'Huyndai H1', data: '' },
    { value: 'Huyndai i10', data: '' },
    { value: 'Huyndai i40', data: '' },
    { value: 'Huyndai Lavita', data: '' },
    { value: 'Huyndai Mighty', data: '' },
    { value: 'Huyndai S coupe', data: '' },
    { value: 'Huyndai Trajet', data: '' },
    { value: 'Huyndai Veracruz', data: '' },
    { value: 'Huyndai Xcent', data: '' },
    { value: 'Isuzu Amigo', data: '' },
    { value: 'Isuzu Aska', data: '' },
    { value: 'Isuzu Dmax', data: '' },
    { value: 'Isuzu Gemini', data: '' },
    { value: 'Isuzu Midi', data: '' },
    { value: 'Isuzu NMR', data: '' },
    { value: 'Isuzu NQR', data: '' },
    { value: 'Isuzu Pick up', data: '' },
    { value: 'Isuzu Rodeo', data: '' },
    { value: 'Isuzu Turkuaz', data: '' },
    { value: 'Isuzu Ascender', data: '' },
    { value: 'Isuzu D cargo', data: '' },
    { value: 'Isuzu FVR', data: '' },
    { value: 'Isuzu Hi lander', data: '' },
    { value: 'Isuzu NLR', data: '' },
    { value: 'Isuzu NPR', data: '' },
    { value: 'Isuzu Panther', data: '' },
    { value: 'Isuzu QKR', data: '' },
    { value: 'Isuzu Trooper', data: '' },
    { value: 'Kia Avella', data: '' },
    { value: 'Kia Carens', data: '' },
    { value: 'Kia Clarus', data: '' },
    { value: 'Kia Forte', data: '' },
    { value: 'Kia Joice', data: '' },
    { value: 'Kia K3000 S', data: '' },
    { value: 'Kia Lotze', data: '' },
    { value: 'Kia Opirus', data: '' },
    { value: 'Kia Ray', data: '' },
    { value: 'Kia Roadster', data: '' },
    { value: 'Kia Sephia', data: '' },
    { value: 'Kia Spectra', data: '' },
    { value: 'Kia Bongo', data: '' },
    { value: 'Kia Carnival', data: '' },
    { value: 'Kia Concord', data: '' },
    { value: 'Kia Frontier', data: '' },
    { value: 'Kia K2700', data: '' },
    { value: 'Kia K5', data: '' },
    { value: 'Kia Magentis', data: '' },
    { value: 'Kia Optima', data: '' },
    { value: 'Kia Pregio', data: '' },
    { value: 'Kia Retona', data: '' },
    { value: 'Kia Rondo', data: '' },
    { value: 'Kia Sorento', data: '' },
    { value: 'Kia Cadenza', data: '' },
    { value: 'Kia Cerato', data: '' },
    { value: 'Kia Enterprise', data: '' },
    { value: 'Kia Jeep', data: '' },
    { value: 'Kia K3', data: '' },
    { value: 'Kia K7', data: '' },
    { value: 'Kia Morning', data: '' },
    { value: 'Kia Picanto', data: '' },
    { value: 'Kia Pride', data: '' },
    { value: 'Kia Rio', data: '' },
    { value: 'Kia Sedona', data: '' },
    { value: 'Kia Soul', data: '' },
    { value: 'Kia Visto', data: 'UV' },
    { value: 'Land Rover Defender', data: '' },
    { value: 'Land Rover Freelander', data: '' },
    { value: 'Land Rover Discovery', data: '' },
    { value: 'Land Rover LR2', data: '' },
    { value: 'Land Rover Sport', data: '' },
    { value: 'Land Rover Evoque', data: '' },
    { value: 'Land Rover Vogue', data: '' },
    { value: 'Lexus CT', data: '' },
    { value: 'Lexus GS', data: '' },
    { value: 'Lexus HS', data: '' },
    { value: 'Lexus LS', data: '' },
    { value: 'Lexus NX', data: '' },
    { value: 'Lexus RX', data: '' },
    { value: 'Lexus SL', data: '' },
    { value: 'Lexus ES', data: '' },
    { value: 'Lexus GX', data: '' },
    { value: 'Lexus IS', data: '' },
    { value: 'Lexus LX', data: '' },
    { value: 'Lexus RC', data: '' },
    { value: 'Mazda 2', data: '' },
    { value: 'Mazda 3', data: '' },
    { value: 'Mazda 323', data: '' },
    { value: 'Mazda 323F', data: '' },
    { value: 'Mazda 5', data: '' },
    { value: 'Mazda 6', data: '' },
    { value: 'Mazda 626', data: '' },
    { value: 'Mazda 929', data: '' },
    { value: 'Mazda Atenza', data: '' },
    { value: 'Mazda AZ', data: '' },
    { value: 'Mazda B series', data: '' },
    { value: 'Mazda Bongo Friende', data: '' },
    { value: 'Mazda BT 50', data: '' },
    { value: 'Mazda Carol', data: '' },
    { value: 'Mazda CX5', data: '' },
    { value: 'Mazda CX7', data: '' },
    { value: 'Mazda CX9', data: '' },
    { value: 'Mazda Eunos', data: '' },
    { value: 'Mazda Millenia', data: '' },
    { value: 'Mazda MPV', data: '' },
    { value: 'Mazda MX3', data: '' },
    { value: 'Mazda MX5', data: '' },
    { value: 'Mazda MX6', data: '' },
    { value: 'Mazda Pickup', data: '' },
    { value: 'Mazda Premacy', data: '' },
    { value: 'Mazda RX7', data: '' },
    { value: 'Mazda RX8', data: '' },
    { value: 'Mazda Tribute', data: '' },
    { value: 'Mazda Xedos 9', data: '' },
    { value: 'Mercedes Benz 190', data: '' },
    { value: 'Mercedes Benz B class', data: '' },
    { value: 'Mercedes Benz CLA class', data: '' },
    { value: 'Mercedes Benz E class', data: '' },
    { value: 'Mercedes Benz GLA class', data: '' },
    { value: 'Mercedes Benz GLK class', data: '' },
    { value: 'Mercedes Benz ML class', data: '' },
    { value: 'Mercedes Benz SL class', data: '' },
    { value: 'Mercedes Benz A class', data: '' },
    { value: 'Mercedes Benz C class', data: '' },
    { value: 'Mercedes Benz CLK class', data: '' },
    { value: 'Mercedes Benz G class', data: '' },
    { value: 'Mercedes Benz GLC', data: '' },
    { value: 'Mercedes Benz M class', data: '' },
    { value: 'Mercedes Benz R class', data: '' },
    { value: 'Mercedes Benz SLK class', data: '' },
    { value: 'Mercedes Benz  SR class', data: '' },
    { value: 'Mercedes Benz Viano', data: '' },
    { value: 'Mercedes Benz Atego', data: '' },
    { value: 'Mercedes Benz  CL class', data: '' },
    { value: 'Mercedes Benz CLS class', data: '' },
    { value: 'Mercedes Benz GL', data: '' },
    { value: 'Mercedes Benz GLE class', data: '' },
    { value: 'Mercedes Benz MB', data: '' },
    { value: 'Mercedes Benz S class', data: '' },
    { value: 'Mercedes Benz SLR', data: '' },
    { value: 'Mercedes Benz Mclaren', data: '' },
    { value: 'Mercedes Benz V class', data: '' },
    { value: 'Mercedes Benz Vito', data: '' },
    { value: 'Mitsubishi 3000GT', data: '' },
    { value: 'Mitsubishi Canter', data: '' },
    { value: 'Mitsubishi Colt', data: '' },
    { value: 'Mitsubishi Eclipse', data: '' },
    { value: 'Mitsubishi Galant', data: '' },
    { value: 'Mitsubishi GTO', data: '' },
    { value: 'Mitsubishi Jeep', data: '' },
    { value: 'Mitsubishi L300', data: '' },
    { value: 'Mitsubishi Libero', data: '' },
    { value: 'Mitsubishi Outlander', data: '' },
    { value: 'Mitsubishi Savrin', data: '' },
    { value: 'Mitsubishi Starion', data: '' },
    { value: 'Mitsubishi Zinger', data: '' },
    { value: 'Mitsubishi Airtek', data: '' },
    { value: 'Mitsubishi Challenges', data: '' },
    { value: 'Mitsubishi Diamante', data: '' },
    { value: 'Mitsubishi EK wagon', data: '' },
    { value: 'Mitsubishi Grandis', data: '' },
    { value: 'Mitsubishi Hover', data: '' },
    { value: 'Mitsubishi Jolie', data: '' },
    { value: 'Mitsubishi L400', data: '' },
    { value: 'Mitsubishi Mirage', data: '' },
    { value: 'Mitsubishi Pajero', data: '' },
    { value: 'Mitsubishi Sigma', data: '' },
    { value: 'Mitsubishi Triton', data: '' },
    { value: 'Mitsubishi Attrage', data: '' },
    { value: 'Mitsubishi Chariot', data: '' },
    { value: 'Mitsubishi Dion', data: '' },
    { value: 'Mitsubishi FTO', data: '' },
    { value: 'Mitsubishi Grunder', data: '' },
    { value: 'Mitsubishi IO', data: '' },
    { value: 'Mitsubishi L200', data: '' },
    { value: 'Mitsubishi Lancer', data: '' },
    { value: 'Mitsubishi Montero', data: '' },
    { value: 'Mitsubishi Santamo', data: '' },
    { value: 'Mitsubishi Space Gear', data: '' },
    { value: 'Mitsubishi Veryca', data: '' },
    { value: 'Nissan 100NX', data: '' },
    { value: 'Nissan 300ZX', data: '' },
    { value: 'Nissan Altima', data: '' },
    { value: 'Nissan Cedric', data: '' },
    { value: 'Nissan Elgrand', data: '' },
    { value: 'Nissan Grand Livina', data: '' },
    { value: 'Nissan Lago', data: '' },
    { value: 'Nissan Liberty', data: '' },
    { value: 'Nissan Micra', data: '' },
    { value: 'Nissan Navara', data: '' },
    { value: 'Nissan Patrol', data: '' },
    { value: 'Nissan Prairie', data: '' },
    { value: 'Nissan Primastal', data: '' },
    { value: 'Nissan Qashqai', data: '' },
    { value: 'Nissan Rogue', data: '' },
    { value: 'Nissan Serena', data: '' },
    { value: 'Nissan Stagea', data: '' },
    { value: 'Nissan Terrano', data: '' },
    { value: 'Nissan Urvan', data: '' },
    { value: 'Nissan Xtrail', data: '' },
    { value: 'Nissan 200SX', data: '' },
    { value: 'Nissan 350Z', data: '' },
    { value: 'Nissan Avenir', data: '' },
    { value: 'Nissan Cefiro', data: '' },
    { value: 'Nissan Frontier', data: '' },
    { value: 'Nissan GTR', data: '' },
  ];
  
  // setup autocomplete function pulling from currencies[] array
  $('#autocomplete').autocomplete({
    lookup: currencies,
    onSelect: function (suggestion) {
      var thehtml ='<input id=Carid value='+ suggestion.data +'></input>';
      $('#outputcontent').html(thehtml);
    }
  });
  

});