<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>{{$user->firstName}} {{$user->lastName}}</title>

    <style type="text/css">
        * { margin: 0; padding: 0; }
        body { font: 16px Helvetica, Sans-Serif; line-height: 24px; background: url({{asset('templates/basic-v1/images/noise.jpg')}}); }
        .clear { clear: both; }
        #page-wrap { width: 800px; margin: 40px auto 60px; }
        #pic { float: right; margin: -30px 0 0 0; }
        h1 { margin: 0 0 16px 0; padding: 0 0 16px 0; font-size: 42px; font-weight: bold; letter-spacing: -2px; border-bottom: 1px solid #999; }
        h2 { font-size: 20px; margin: 0 0 6px 0; position: relative; }
        h2 span { position: absolute; bottom: 0; right: 0; font-style: italic; font-family: Georgia, Serif; font-size: 16px; color: #999; font-weight: normal; }
        p { margin: 0 0 16px 0; }
        a { color: #999; text-decoration: none; }
        ul { margin: 0 0 32px 17px; }
        #objective { width: 500px; float: left; }
        #objective p { font-family: Georgia, Serif; font-style: italic; color: #666; }
        dt { font-style: italic; font-weight: bold; font-size: 18px; text-align: right; padding: 0 26px 0 0; width: 150px; float: left; height: 100px; border-right: 1px solid #999;  }
        dd { width: 600px; float: right; }
        dd.clear { float: none; margin: 0; height: 15px; }
        .example {
            position: relative;
            width: 100%;
            padding-top: 25%;
        }
        .example > .block:nth-of-type(1) {
            height: 80%;
            top: 45%;
            left: 0;
            width: 20%;
        }
        .example > .block {
            position: absolute;
            height: 100%;
            width: 40%;
            -webkit-perspective: 1000px;
            perspective: 1000px;
        }
        .example > .block > .side.-main {
            height: 100%;
            width: 100%;
            -webkit-transform: rotateY(30deg);
            transform: rotateY(30deg);
            -webkit-transform-origin: 0 50%;
            transform-origin: 0 50%;
        }
        .example > .block > .side.-main {
            height: 100%;
            width: 100%;
            -webkit-transform: rotateY(30deg);
            transform: rotateY(30deg);
            -webkit-transform-origin: 0 50%;
            transform-origin: 0 50%;
        }
        .example > .block:nth-of-type(1) > .side.-left {
            background-position: 0 50%;
            background-size: auto 130%;
        }
        .example > .block > .side.-left {
            height: 100%;
            width: 20%;
            -webkit-transform-origin: 0 50%;
            transform-origin: 0 50%;
            -webkit-transform: rotateY(-60deg) translateX(-100%);
            transform: rotateY(-60deg) translateX(-100%);
            -webkit-filter: brightness(40%);
            filter: brightness(40%);
        }
        .example > .block > .side {
            position: absolute;
            top: 0;
            left: 0;
            background-image: url({{asset('templates/basic-v1/images/profile-photo1.jpg')}});
            background-size: 100% 100%;
            box-shadow: -1vw 0.5vw 1vw rgba(0, 0, 0, 0.3);
            background-repeat: no-repeat;
        }
    </style>
</head>

<body style="margin-top: -100px">

<div id="page-wrap">


    <div id="contact-info" class="vcard">
        <div class="example">
            <div class="block">
                <div class="side -main"></div>
                <div class="side -left"></div>
            </div>
        </div>
        <!-- Microformats! -->

        <h1 style="text-align: right" class="fn">{{$user->firstName}} {{$user->lastName}}</h1>

        <p style="margin-top: 50px">
            Email: <a class="email" href="mailto:{{$user->email}}">{{$user->email}}</a><br>
            @if(json_decode($user->contacts, true)['phone']['visibility'] == 1)
                Cell: <a href="tel:{{json_decode($user->contacts, true)['phone']['content']}}"><span class="tel">{{json_decode($user->contacts, true)['phone']['content']}}</span></a><br />
            @endif
            @if(json_decode($user->contacts, true)['address']['visibility'] == 1)
                Address : <a target='_blank' href="https://google.com/maps/place/{{json_decode($user->contacts, true)['address']['content']}}">{{json_decode($user->contacts, true)['address']['content']}}</a>
            @endif
        </p>
    </div>

    <div id="objective">
        <p>{{$user->shortResume}}</p>
    </div>

    <div class="clear"></div>

    <dl>
        <dd class="clear"></dd>

        <dt>Education</dt>
        <dd>
            <h2>Withering Madness University - Planet Vhoorl</h2>
            <p><strong>Major:</strong> Public Relations<br />
                <strong>Minor:</strong> Scale Tending</p>
        </dd>

        <dd class="clear"></dd>

        <dt>Skills</dt>
        <dd>
            <h2>Office skills</h2>
            <p>Office and records management, database administration, event organization, customer support, travel coordination</p>

            <h2>Computer skills</h2>
            <p>Microsoft productivity software (Word, Excel, etc), Adobe Creative Suite, Windows</p>
        </dd>

        <dd class="clear"></dd>

        <dt>Experience</dt>
        <dd>
            <h2>Doomsday Cult <span>Leader/Overlord - Baton Rogue, LA - 1926-2010</span></h2>
            <ul>
                <li>Inspired and won highest peasant death competition among servants</li>
                <li>Helped coordinate managers to grow cult following</li>
                <li>Provided untimely deaths to all who opposed</li>
            </ul>

            <h2>The Watering Hole <span>Bartender/Server - Milwaukee, WI - 2009</span></h2>
            <ul>
                <li>Worked on grass-roots promotional campaigns</li>
                <li>Reduced theft and property damage percentages</li>
                <li>Janitorial work, Laundry</li>
            </ul>
        </dd>

        <dd class="clear"></dd>

        <dt>Hobbies</dt>
        <dd>World Domination, Deep Sea Diving, Murder Most Foul</dd>

        <dd class="clear"></dd>

        <dt>References</dt>
        <dd>Available on request</dd>

        <dd class="clear"></dd>
    </dl>

    <div class="clear"></div>

</div>

</body>
</html>
