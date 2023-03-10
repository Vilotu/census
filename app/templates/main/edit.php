<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Перепись</title>
    <link rel="stylesheet" href="/styles.css">
</head>
<body>


<table class="layout">
    <tr>
        <td colspan="2" class="header">
            Перепись

        </td>
    </tr>
    <tr>
        <td>
            <form action="/person/<?= $person->getId() ?>/edit" method="post">
                <ul>
                    <li>Имя:</li>
                    <li>
                        <input type="text" name="name" id="name" value="<?= $_POST['name'] ?? $person->getName() ?>">
                    </li>
                </ul>
                <ul>
                    <li>
                        Возраст:
                    </li>
                    <li>
                        <input type="number" name="age" id="age" value="<?= $_POST['age'] ?? $person->getAge() ?>">
                    </li>
                </ul>
                <ul>
                    <li>
                        <input type="submit" value="Обновить">
                    </li>
                </ul>
            </form>
        </td>
    </tr>

</table>
</body>
</html>
