
CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    body VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)

drop table foods

CREATE TABLE foods (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    count INTEGER(11) NOT NULL,
    description VARCHAR(255) NOT NULL,
    image_path VARCHAR(255),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    category_id INT,
    CONSTRAINT fk_category FOREIGN KEY (category_id) REFERENCES categories(id)
);

ALTER TABLE foods
ADD COLUMN category_id INT,
ADD CONSTRAINT fk_category FOREIGN KEY (category_id) REFERENCES categories(id);

ALTER TABLE foods
ADD COLUMN image_path VARCHAR(255);

CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name varchar(255) not null,
    description VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)


If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
