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
            <form action="/person/add" method="post">
                <ul>
                    <li>Имя:</li>
                    <li>
                        <input type="text" name="name" id="name">
                    </li>
                </ul>
                <ul>
                    <li>
                        Возраст:
                    </li>
                    <li>
                        <input type="number" name="age" id="age">
                    </li>
                </ul>
                <ul>
                    <li>
                        <input type="submit" value="Добавить">
                    </li>
                </ul>
            </form>
        </td>
    </tr>
    <tr>
        <td>
            <?php if (!empty($error)): ?>
                <div style="color: red"><?= $error ?></div>
            <?php else: ?>
            <?php foreach ($persons as $person): ?>

            <ul>
                <li>
                    <?= $person->getName() ?>
                    <?= $person->getAge() ?>
                    <a href="person/<?= $person->getId() ?>/edit">✎</a>
                    <a href="person/<?= $person->getId() ?>/delete">&#10060;</a>
                </li>
            </ul>

            <?php endforeach; ?>
        </td>
    </tr>
    <tr>
        <td class="footer" colspan="2">
            <ul>
                <li>Переписано человек:</li>
                <li><?= $totalPersons ?></li>
            </ul>
            <ul>
                <li>Общий возраст:</li>
                <li><?= $totalAge ?></li>
            </ul>
            <?php endif; ?>
        </td>
    </tr>
</table>
</body>
</html>
