@extends('layouts.dashboard')
@section('page-title', 'Residents')
@section('page-content')
    <div class="row">
        <div class="col">
            <h4 class="card-title">Update User Profile</h4>
            {!! Form::open(['action' => 'ResidentController@storeUserProfile']) !!}
            <div class='form-group row ui-widget'>
                {!! Form::label('nationality_type', 'Malaysian:', ['class' => 'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::checkbox('nationality_type', 'Malaysian', false) !!}
                </div>
            </div>
            <div class='form-group row'>
                {!! Form::label('first_name', 'First Name:', ['class' => 'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class='form-group row'>
                {!! Form::label('last_name', 'Last Name:', ['class' => 'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class='form-group row ui-widget'>
                {!! Form::label('nationality', 'Nationality:', ['class' => 'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('nationality', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class='form-group row'>
                {!! Form::label('nric', 'NRIC No:', ['class' => 'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('nric', null, ['class' => 'form-control disabled', 'disabled' => 'true']) !!}
                    <span class="help-block">Please enter NRIC in this format YYMMDD-SS-RRRR</span>
                </div>
            </div>
            <div class='form-group row'>
                {!! Form::label('passport', 'Passport No:', ['class' => 'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('passport', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class='form-group row'>
                {!! Form::label('gender', 'Gender:', ['class' => 'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::select('gender', ['Male' => 'Male','Female' => 'Female'], old('gender')) !!}
                </div>
            </div>
            <div class='form-group row'>
                {!! Form::label('blood_group', 'Blood Group:', ['class' => 'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::select('blood_group', ['O' => 'O', 'A' => 'A', 'B' => 'B', 'AB' => 'AB'],old('blood_group')) !!}
                </div>
            </div>
            <div class='form-group row'>
                {!! Form::label('date_of_birth', 'Date Of Birth:', ['class' => 'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::date('date_of_birth', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
                </div>
            </div>
            {!! Form::hidden('user_id', auth()->id()) !!}
            {!! Form::submit("Submit", ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
    <script>
        $(function () {
            // check nationality type
            $('#nationality_type').click(function () {
                if ($('#nationality_type').is(':checked')) {
                    $('#nationality').val('Malaysian').prop("disabled", false).addClass("disabled");
                    $('#nric').prop("disabled", false).removeClass("disabled");
                }
                else {
                    $('#nationality').val(null).prop("disabled", false).removeClass("disabled");
                    $('#nric').prop("disabled", true).addClass("disabled");
                }
            });

            // nationality autocomplete
            var nationality = [
                "Afghan",
                "Albanian",
                "Algerian",
                "American",
                "Andorran",
                "Angolan",
                "Antiguans",
                "Argentinean",
                "Armenian",
                "Australian",
                "Austrian",
                "Azerbaijani",
                "Bahamian",
                "Bahraini",
                "Bangladeshi",
                "Barbadian",
                "Barbudans",
                "Batswana",
                "Belarusian",
                "Belgian",
                "Belizean",
                "Beninese",
                "Bhutanese",
                "Bolivian",
                "Bosnian",
                "Brazilian",
                "British",
                "Bruneian",
                "Bulgarian",
                "Burkinabe",
                "Burmese",
                "Burundian",
                "Cambodian",
                "Cameroonian",
                "Canadian",
                "Cape Verdean",
                "Central African",
                "Chadian",
                "Chilean",
                "Chinese",
                "Colombian",
                "Comoran",
                "Congolese",
                "Costa Rican",
                "Croatian",
                "Cuban",
                "Cypriot",
                "Czech",
                "Danish",
                "Djibouti",
                "Dominican",
                "Dutch",
                "East Timorese",
                "Ecuadorean",
                "Egyptian",
                "Emirian",
                "Equatorial Guinean",
                "Eritrean",
                "Estonian",
                "Ethiopian",
                "Fijian",
                "Filipino",
                "Finnish",
                "French",
                "Gabonese",
                "Gambian",
                "Georgian",
                "German",
                "Ghanaian",
                "Greek",
                "Grenadian",
                "Guatemalan",
                "Guinea-Bissauan",
                "Guinean",
                "Guyanese",
                "Haitian",
                "Herzegovinian",
                "Honduran",
                "Hungarian",
                "I-Kiribati",
                "Icelander",
                "Indian",
                "Indonesian",
                "Iranian",
                "Iraqi",
                "Irish",
                "Israeli",
                "Italian",
                "Ivorian",
                "Jamaican",
                "Japanese",
                "Jordanian",
                "Kazakhstani",
                "Kenyan",
                "Kittian and Nevisian",
                "Kuwaiti",
                "Kyrgyz",
                "Laotian",
                "Latvian",
                "Lebanese",
                "Liberian",
                "Libyan",
                "Liechtensteiner",
                "Lithuanian",
                "Luxembourger",
                "Macedonian",
                "Malagasy",
                "Malawian",
                "Maldivan",
                "Malian",
                "Maltese",
                "Marshallese",
                "Mauritanian",
                "Mauritian",
                "Mexican",
                "Micronesian",
                "Moldovan",
                "Monacan",
                "Mongolian",
                "Moroccan",
                "Mosotho",
                "Motswana",
                "Mozambican",
                "Namibian",
                "Nauruan",
                "Nepalese",
                "New Zealander",
                "Nicaraguan",
                "Nigerian",
                "Nigerien",
                "North Korean",
                "Northern Irish",
                "Norwegian",
                "Omani",
                "Pakistani",
                "Palauan",
                "Panamanian",
                "Papua New Guinean",
                "Paraguayan",
                "Peruvian",
                "Polish",
                "Portuguese",
                "Qatari",
                "Romanian",
                "Russian",
                "Rwandan",
                "Saint Lucian",
                "Salvadoran",
                "Samoan",
                "San Marinese",
                "Sao Tomean",
                "Saudi",
                "Scottish",
                "Senegalese",
                "Serbian",
                "Seychellois",
                "Sierra Leonean",
                "Singaporean",
                "Slovakian",
                "Slovenian",
                "Solomon Islander",
                "Somali",
                "South African",
                "South Korean",
                "Spanish",
                "Sri Lankan",
                "Sudanese",
                "Surinamer",
                "Swazi",
                "Swedish",
                "Swiss",
                "Syrian",
                "Taiwanese",
                "Tajik",
                "Tanzanian",
                "Thai",
                "Togolese",
                "Tongan",
                "Trinidadian or Tobagonian",
                "Tunisian",
                "Turkish",
                "Tuvaluan",
                "Ugandan",
                "Ukrainian",
                "Uruguayan",
                "Uzbekistani",
                "Venezuelan",
                "Vietnamese",
                "Welsh",
                "Yemenite",
                "Zambian",
                "Zimbabwean"
            ];

            $("#nationality").autocomplete({
                source: nationality
            });
        });
    </script>
@stop