SELECT *, COUNT(*) FROM models, cars WHERE models.id=cars.model_id GROUP BY name

SELECT * FROM cars WHERE model_id NOT IN (SELECT id FROM models)

SELECT models.name,sum(`price`) FROM models, cars WHERE models.id=cars.model_id AND cars.price>10  GROUP BY name HAVING SUM(`price`)>60


