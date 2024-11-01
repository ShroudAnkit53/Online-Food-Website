CREATE TABLE bookings (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    bookingid INT(11), -- Optional: For user-specific bookings
    date DATE NOT NULL,
    persons INT(5) NOT NULL,
    time TIME NOT NULL,
);
