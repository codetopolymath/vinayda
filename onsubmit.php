<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://ap-south-1.aws.data.mongodb-api.com/app/data-lpxwz/endpoint/data/v1/action/insertOne');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{
    "dataSource": "Cluster0",
    "database": "portfolio",
    "collection": "contacts",
    "document": {
        "name": "Rohit Ghawale 2",
        "email": "rohitatyourservice@gmail.com",
        "message": "another test message"
    }
}');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'apiKey: fcXWeFPrSuDuiVAiZ2AMhv1ovjSWjXyAjGHddNIm6Toisk52ZOybYfjXC3bCRYIl',
    'Content-Type: application/json'
));

$result = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}

curl_close($ch);

echo $result;

?>
