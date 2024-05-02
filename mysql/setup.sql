CREATE DATABASE ibrew
USE ibrew

CREATE TABLE `users`
(
    `id`         integer PRIMARY KEY AUTO_INCREMENT,
    `username`   varchar(255),
    `email`      varchar(255),
    `password`   varchar(255),
    `role`       varchar(255),
    `created_at` varchar(255)
);

CREATE TABLE `products`
(
    `id`          integer PRIMARY KEY AUTO_INCREMENT,
    `name`        varchar(255),
    `category`    varchar(255),
    `description` text,
    `url`         varchar(255),
    `price`       double
);

CREATE TABLE `orders`
(
    `id`               integer PRIMARY KEY AUTO_INCREMENT,
    `user_id`          integer,
    `status`           varchar(255),
    `shipping_address` text,
    `payment_method`   varchar(255),
    `delivery_method`  varchar(255),
    `total_cost`       double
);

CREATE TABLE `order_items`
(
    `id`         integer PRIMARY KEY AUTO_INCREMENT,
    `order_id`   integer,
    `product_id` integer,
    `quantity`   integer
);

CREATE TABLE `delivery_methods`
(
    `id`    integer PRIMARY KEY,
    `name`  varchar(255),
    `price` double
);

ALTER TABLE `orders`
    ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

# ALTER TABLE `products` ADD FOREIGN KEY (`id`) REFERENCES `orders` (`items`);

ALTER TABLE `orders`
    ADD FOREIGN KEY (`delivery_method`) REFERENCES `delivery_methods` (`id`);
