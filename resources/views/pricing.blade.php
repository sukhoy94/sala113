@extends('layouts.app')

@section('title', 'Cennik - Sala 113')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-4">Cennik Wynajmu Przestrzeni Sala 113</h1>

        <div class="mb-5">
            <p class="text-center">Oferujemy elastyczne opcje wynajmu naszej przestrzeni w zależności od Twoich potrzeb. Skorzystaj z naszej oferty godzinowej lub specjalnych cen za dłuższe wynajmy!</p>
        </div>

        <table class="table table-bordered text-center" style="background: #f0f0e5;">
            <thead class="table-light">
            <tr>
                <th>Czas Wynajmu</th>
                <th>Cena</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1 godzina</td>
                <td>50 zł</td>
            </tr>
            <tr>
                <td>4 godziny</td>
                <td>150 zł</td>
            </tr>
            </tbody>
        </table>

        <div class="mt-4">
            <h3 class="text-center">Uwagi</h3>
            <ul>
                <li>Podane ceny są cenami netto. (Nie jesteśmy watowcami)</li>
                <li>Rezerwacji należy dokonywać z wyprzedzeniem telefonicznie, mailowo lub za pomocą mediów społecznościowych.</li>
                <li>Możliwość negocjacji cen przy wynajmie długoterminowym (np. powyżej 8 godzin).</li>
                <li>W przypadku odwołania rezerwacji obowiązują zasady opisane w regulaminie.</li>
            </ul>
        </div>
    </div>
@endsection
