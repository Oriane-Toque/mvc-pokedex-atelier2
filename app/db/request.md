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
