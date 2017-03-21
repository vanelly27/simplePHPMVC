<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <title>{{page_title}}</title>
            <meta name="viewport" content="width=device-width, initial-scale=1"/>
            <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
            <link rel="stylesheet" href="public/css/estilo.css" />
            {{foreach css_ref}}
                <link rel="stylesheet" href="{{uri}}" />
            {{endfor css_ref}}
        </head>
        <body>
          <header>
            <nav>
              <ul>
                <li><a href="index.php?page=home">TURIHN</a></li>
                <li><a href="index.php?page=acerca">Acerca</a></li>
              </ul>
            </nav>
          </header>
            <section class="contenido">
                {{{page_content}}}
            </section>
            <footer>
                Derechos Reservados 2017
            </footer>
        </body>
    </html>
