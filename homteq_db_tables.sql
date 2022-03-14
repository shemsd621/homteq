CREATE TABLE Product (
	prodID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    prodName VARCHAR(200) NOT NULL,
    prodPicNameSmall VARCHAR(200) NOT NULL,
    prodPicNameLarge VARCHAR(200) NOT NULL,
    prodDescripShort VARCHAR(1000),
	prodDescripLong VARCHAR(3000),
	prodPrice DECIMAL(8,2) NOT NULL,
	prodQuantity INT NOT NULL
)

INSERT INTO Product (prodName, prodPicNameSmall, prodPicNameLarge, prodDescripShort, prodDescripLong, prodPrice, prodQuantity)
VALUES ('Asus ROG Strix G15 Advantage Edition', 'strix_1_g15_small.png', 'strix_1_g15_large.jpg', 
'Best gaming laptop on a budget', 
'The Asus ROG Strix G15 Advanced Edition is an all-AMD laptop that delivers fast CPU and GPU performance at a reasonable price point. It’s packing an AMD Ryzen 5900HX processor, an AMD Radeon RX 6800M GPU, 16GB of RAM, and 512GB of SSD storage. The GPU “doesn’t outpace higher-wattage RTX 3080 laptop GPUs, but it’s a worthy competitor for conventional gaming tasks.” Unsurprisingly, the Strix G15 is one chunky machine, measuring 28mm at its thickest part. Although the additional thickness allows more space for cooling components, it’s not very portable. That said, so long as you don’t plan on taking this laptop everywhere with you, it’s a powerful gaming rig that’s well worth the money.', 
'1649.99', '18'),
VALUES('Microsoft Surface Pro 8', 'surface_2_small.png' ,'surface_2_large.jpg', 
'Best 2-in-1 laptop',
'Microsoft’s Surface tablets were already atop our list of best 2-in-1 laptops, but Microsoft reworked the Surface Pro 8 in numerous ways by adding a larger, higher-resolution, faster screen, a pair of Thunderbolt ports that replace the legacy Surface Connector, and a new inking experience, among other features.',
'999.99', '20'),
VALUES('Pixelbook Go', 'pixelbook_3_small.png', 'pixelbook_3_large.jpg',
'Best Chromebook',
'Google’s Pixelbook Go is a perfectly good Chromebook and that’s exactly what the company set out to create. It offers a careful balance of quality features and economical compromises for a reasonable $649 starting price. And it’s a darn sight better than the typical bare-bones model. If you’re committed to the Chromebook universe, this is a laptop worth buying.',
'649', '15'),
VALUES('HP Spectre x360 14 1Q881AV', 'spectre_4_small.png', 'spectre_4_large.jpeg', 
'Best lightweight laptop for college students',
'When we think about the best thin-and-light laptop, it’s always been a close contest between the Dell XPS 2-in-1 and the HP Spectre x360. This time around, we’re giving the luxurious HP Spectre x360 14 some time in the sun. The Spectre x360 14, now sporting the same Intel 11th-gen Tiger Lake CPU available in the Dell XPS line, trades blows with its eternal rival in test after test. It rises to the top because of a few key advantages: It offers longer battery life (thanks to a bigger battery), a far better keyboard, and little things like a USB-A port and a physical webcam shutoff switch, all for a lower price. Well played, HP.',
'1099.99', '25');