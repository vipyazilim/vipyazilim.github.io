<!doctype html>

<html lang="tr">

<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Vip Yazılım</title>

  <style>

    :root{

      --blue-600: #0b66ff;

      --blue-300: #6ea8ff;

      --bg: #f6fbff;

      --card: #ffffff;

      --text: #0b2538;

    }

    *{box-sizing:border-box}

    html,body{height:100%}

    body{

      margin:0;

      font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;

      background: linear-gradient(180deg,var(--bg),#ffffff 60%);

      color:var(--text);

      display:flex;

      align-items:center;

      justify-content:center;

      padding:24px;

    }

    .card{

      background:var(--card);

      border-radius:16px;

      width:100%;

      max-width:520px;

      padding:36px 28px;

      box-shadow: 0 10px 30px rgba(11,102,255,0.08), 0 2px 6px rgba(2,6,23,0.04);

      border: 1px solid rgba(11,102,255,0.08);

      text-align:center;

    }

    h1{

      margin:0 0 10px 0;

      font-size:28px;

      letter-spacing:0.2px;

      color:var(--blue-600);

    }

    p{margin:0;color:#27445a}

    .contact{

      margin-top:18px;

      display:inline-block;

      padding:10px 14px;

      border-radius:10px;

      background: linear-gradient(90deg, rgba(11,102,255,0.08), rgba(110,168,255,0.04));

      border:1px solid rgba(11,102,255,0.06);

      font-weight:600;

    }

    a.email{

      color:var(--blue-600);

      text-decoration:none;

    }

    a.email:hover{ text-decoration:underline }

    @media (max-width:420px){

      .card{padding:24px}

      h1{font-size:22px}

    }

  </style>

</head>

<body>

  <main class="card" role="main">

    <h1>Vip Yazılım</h1>

    <p class="contact">İletişim: <a class="email" href="mailto:vipyazilim@gmail.com">vipyazilim@gmail.com</a></p>

  </main>

</body>

</html>



