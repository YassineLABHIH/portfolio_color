<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact email</title>
</head>

<body>
    <div>

        <div>
            <h3>Contact : </h3>

            <span>Nom : </span><span> {{ $customer['last_name'] }}</span> <br>
            <span>Prénom : </span><span> {{ $customer['first_name'] }}</span> <br>
            <span>Mail : </span><span> {{ $customer['email'] }}</span> <br>
            <span>Tél : </span><span> {{ $customer['tel'] }}</span> <br>
        </div>

        <hr>

        <h3>Services :</h3>

        <ul>


            @if($customer['showcase_site'] == true)
            <li>Site vitrine
                @endif

                @if($customer['e-commerce'] == true)
            <li>Site e-commerce</li>
            @endif


            @if($customer['web_app'] == true)
            <li>Web app</li>
            @endif


            @if($customer['mobile_app'] == true)
            <li>Mobile app</li>
            @endif

            @if($customer['graphic_design'] == true)
            <li>Graphisme</li>
            @endif

            @if($customer['seo'] == true)
            <li>SEO</li>
            @endif

            @if($customer['advertisement'] == true)
            <li>Publicité</li>
            @endif

            @if($customer['other'] == true)
            <li>Autre</li>
            @endif

        </ul>

    </div>

<hr>

    <div>
        <h3>Message : </h3>
        <p>{{ $customer['message'] }}</p>
    </div>

</body>

</html>
