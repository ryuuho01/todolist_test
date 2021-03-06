<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/dayjs"></script>
    <script src="https://unpkg.com/dayjs@1.7.7/locale/ja.js"></script>
    <title>COACHTECH</title>
    <style type=></style>
    <style>
    html, body, div, span, object, iframe,
    h1, h2, h3, h4, h5, h6, p, blockquote, pre,
    abbr, address, cite, code,
    del, dfn, em, img, ins, kbd, q, samp,
    small, strong, sub, sup, var,
    b, i,
    dl, dt, dd, ol, ul, li,
    fieldset, form, label, legend,
    table, caption, tbody, tfoot, thead, tr, th, td,
    article, aside, canvas, details, figcaption, figure,
    footer, header, hgroup, menu, nav, section, summary,
    time, mark, audio, video {
    margin:0;
    padding:0;
    border:0;
    outline:0;
    font-size:100%;
    vertical-align:baseline;
    background:transparent;
    }

    body {
        line-height:1;
    }

    article,aside,details,figcaption,figure,
    footer,header,hgroup,menu,nav,section {
        display:block;
    }

    nav ul {
        list-style:none;
    }

    blockquote, q {
        quotes:none;
    }

    blockquote:before, blockquote:after,
    q:before, q:after {
        content:'';
        content:none;
    }

    a {
        margin:0;
        padding:0;
        font-size:100%;
        vertical-align:baseline;
        background:transparent;
    }

    /* change colours to suit your needs */
    ins {
        background-color:#ff9;
        color:#000;
        text-decoration:none;
    }

    /* change colours to suit your needs */
    mark {
        background-color:#ff9;
        color:#000;
        font-style:italic;
        font-weight:bold;
    }

    del {
        text-decoration: line-through;
    }

    abbr[title], dfn[title] {
        border-bottom:1px dotted;
        cursor:help;
    }

    table {
        border-collapse:collapse;
        border-spacing:0;
    }

    /* change border colour to suit your needs */
    hr {
        display:block;
        height:1px;
        border:0;  
        border-top:1px solid #cccccc;
        margin:1em 0;
        padding:0;
    }

    input, select {
        vertical-align:middle;
    }

    
    body {
      line-height: 1;
    }
    .box {
      position:relative;
      background-color: #2d197c;
      height: 100vh;
      width: 100vw;
    }
    p {
      font-size:24px;
      font-weight:bold;
      margin-bottom: 15px;
    }
    .card {
      width:50vw;
      position: absolute;
      top:50%;
      left:50%;
      transform:translate(-50%,-50%);
      background-color: white;
      padding:30px;
      box-shadow:none;
      border-radius:10px;
    }
    .content {
      margin:10px; 
    }
    
    
    </style>
  </head>
  <body>
    <div class="box">
      <div class="card">
        <div class="content">
          <p>Todo List</p>
          @yield('content')
        </div>
      </div>
    </div>
  </body>
</html>