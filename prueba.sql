SELECT e.*, c.* FROM entradas e
INNER JOIN categorias c ON e.categoria_id = c.id
ORDER BY e.id DESC LIMIT 4