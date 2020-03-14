create DATABASE animal;
grant all
    ON animal.* to dbuser@localhost
identified by 'koslgasf';
create table animals
(
  id int(11) NOT NULL
  auto_increment primary key,
         name varchar
  (255) unique,
         food varchar
  (255),
         create_date datetime,
         update_date timestamp );

  ALTER TABLE animals ADD create_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP;

  INSERT INTO animals
    (name,food)
  VALUES('ぞう', '草');
  INSERT INTO animals
    (name,food)
  VALUES('キリン', '草');
  INSERT INTO animals
    (name,food)
  VALUES('犬', '肉');
  INSERT INTO animals
    (name,food)
  VALUES('猫', '肉');
  INSERT INTO animals
    (name,food)
  VALUES('キツネ', '肉');
  INSERT INTO animals
    (name,food)
  VALUES('シカ', 'せんべい');
  INSERT INTO animals
    (name,food,create_date)
  VALUES('ふくろう', 'ねずみ', cast
( now
() as datetime));

  INSERT INTO animals
    (name,food,create_date)
  VALUES('ハイエナ', '肉', CURRENT_TIMESTAMP
  ());
  INSERT INTO animals
    (name,food,create_date)
  VALUES('ウサギ', '草', CURRENT_TIMESTAMP
  ());
  INSERT INTO animals
    (name,food,create_date)
  VALUES('カバ', '雑食', CURRENT_TIMESTAMP
  ());
  INSERT INTO animals
    (name,food,create_date)
  VALUES('パンダ', '笹', CURRENT_TIMESTAMP
  ());

