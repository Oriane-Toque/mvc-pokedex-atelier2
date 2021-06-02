# Request

## Request to find all Pokemon order by *number*

```sql
SELECT *
FROM `pokemon`
ORDER BY `numero`
ASC
```

## Request to find details's pokemon (#id)

```sql
SELECT *
FROM `pokemon`
WHERE `id` = $id
```

## Request to find type's pokemon (#id)

```sql
SELECT `type`.`name`, `color`
FROM `type`
INNER JOIN `pokemon_type`
ON `type`.`id` = `pokemon_type`.`type_id`
INNER JOIN `pokemon`
ON `pokemon_type`.`pokemon_numero` = `pokemon`.`numero`
WHERE `pokemon`.`id` = $id
```

## Request to find all types order by #id

```sql
SELECT *
FROM `type`
ORDER BY `id`
ASC
```

## Request to find all pokemon by (#id) type order by numero

```sql
SELECT *
FROM `pokemon`
INNER JOIN `pokemon_type`
ON `pokemon`.`numero` = `pokemon_type`.`pokemon_numero`
WHERE `type_id` = $id
ORDER BY `pokemon`.`numero`
```
