@inject("verif_weekend","App\ServiceInjectionUtilities\DateInjection")

@if($verif_weekend->isWeekend())
    {{ " Nous somme week-end " }}
@else
    {{ "Nous ne somme pas week-end " }}
@endif

