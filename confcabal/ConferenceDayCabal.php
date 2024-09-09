<?php
  include( "./includes/incHTMLHeader.php" );
?>
  <body>
    <?php
      include( "./includes/Environ.php" );
    ?>
    <div class="menu">
      <?php
        include( "./includes/incMenu.php" );
        echo( "$DisplayBlock" );
      ?>
    </div>
    <div class="content">
      <?php
        include( "./includes/incCommonHeader.php" );
        print(   "<p class=\"TitleFont\" style=\"text-align:center;\">" );
        $Lang='es';
        if( $Lang == 'es' )
          print(   "LinuxCabal
                    <br />
                    se honra en presentar
                    <br />
                    Dia de Conferencias FLOSS LinuxCabal" );
        else
          print(   "LinuxCabal
                    <br />
                    is honored to present
                    <br />
                    FLOSS Conference Day LinuxCabal" );
        print(   "</p>" );
        if( $Lang == 'es' )
          print( "<p class=\"SubTitleFont\" style=\"text-align: center;\">
                    (Dia de Conferencias FLOSS LinuxCabal)
                    <br />
                    <a href=\"http://www.linuxcabal.org/DiaDeConf20240928.php?Lang=es&From=Eventos\"><img src=\"images/flossconferenceday-linuxcabal.svg\" alt=\"FLOSS Conference Day LinuxCabal.svg\" /></a>
                  </p>
                  <p>
                    Dia de Conferencias FLOSS LinuxCabal Es un evento e
                    iniciativa de la comunidad de Open Source de Guadalajara.
                    Tiene como propósito promover
                    el uso de FLOSS y la integración de comunidades de
                    usuarios de FLOSS en Mexico.
                    LinuxCabal siempre ha estado abierto para la comundiad
                    de open source en Mexico y ha sido parte de la historia
                    y crecimiento del Open Source en Guadalajara particularmente.
                    Varias luminarias del Open Source mundial han llegado a Linux Cabal
                    y este evento es una forma de reconocer la importancia la constancia
                    que aporta LinuxCabal hacia la comunidad de F/OSS en Mexico.
                  </p>
                  <p>
                    En el Dia de Conferencias FLOSS Cabal se hablará sobre todos los sistemas
                    operativos, programas y demas accesorios libres.
                  </p>
                  <p style=\"font:bold 18pt helvetica; color:#000000;
                             text-align: center;\">
                    El Sábado, 28 de Sepiembre del 2024
                    <br />
                    <br />
                    <a href=\"Mapa.php?Lang=$Lang&amp;From=$From\">En las
                              instalaciones de LinuxCabal</a>
                    <br />
                    <br />
                    de 15:00 a 21:00 hrs.
                  </p>
                  <p class=\"SubTitleFont\" style=\"text-align: center;\">
                    La entrada es gratuita.
                  </p>
                  <p>
                    Si tienes interés en conocer a las
                    comunidades de F/OSS y GNU &amp; Linux eres bienvenido.
                  </p>
                  <p>
                    Ahora, si deseas instalar programas de F/OSS
                    y/o GNU &amp; Linux; no olvides tu
                    computadora. Vamos tener el Install Fest en las
                    instalaciones de LinuxCabal, de 15:00 a 21:00 hrs.
                  </p>
                  <p>
                    Nosotros tenemos Mageia y Fedora. Si
                    quieres instalar alguna otra distribución de GNU
                    &amp; Linux trae los discos de instalación y te
                    decimos cómo.
                  </p>
                  <p style=\"font:24pt helvetica; color:#000000;
                     text-align: center;\">
                    <strong>Programa</strong>
                  </p>
                  <table style=\"border-width:thick; border-style:ridge;
                               text-align:center; width:95%; margin:0 auto;\" >
                    <tr style=\"background-color: #DDDDDD\">
                      <th style='width:20%'>
                        Hora
                      </th>
                      <th colspan=\"2\" style='width:60%';>
                        Ponencias
                      </th>
              
                    </tr>

                    <tr style=\"text-align: center\">
                      <td>
                        &nbsp;15:00&nbsp;-&nbsp;16:00&nbsp;
                      </td>
                      <td>
                        Conference name 1
                        <br />
                        por
                        <br />
                        Autor 1
                      </td>
                    </tr>

                    <tr style=\"text-align: center\">
                      <td>
                        &nbsp;16:00&nbsp;-&nbsp;17:00&nbsp;
                      </td>
                      <td>
                        <br />
                        Conference name 2
                        <br />
                        por
                        <br />
                        Autor 2
                      </td>
                    </tr>

                    <tr style=\"text-align: center\">
                      <td>
                        &nbsp;17:00&nbsp;-&nbsp;18:00&nbsp;
                      </td>
                      <td>
                        Conference name 3
                        <br />
                        por 
                        <br />
                        Autor 3
                      </td>

                      <td rowspan=\"3\" style=\"background:#bdff22;
                                                margin:25px auto;\">
                        C
                        <br />
                        E
                        <br />
                        N
                        <br />
                        A
                      </td>
                    </tr>

                    <tr style=\"text-align: center\">
                      <td>
                        &nbsp;18:00&nbsp;-&nbsp;19:00&nbsp;
                      </td>
                      <td>
                        Conference name 4
                        <br />
                        por 
                        <br />
                        Autor 4
                      </td>
                    </tr>

                    <tr style=\"text-align: center\">
                      <td>
                        &nbsp;19:00 - 20:00&nbsp;
                      </td>
                      <td>
                        Conference name 5
                        <br />
                        por 
                        <br />
                        Autor 5
                      </td>
                    </tr>

                    <tr style=\"text-align: center\">
                      <td>
                        &nbsp;20:00&nbsp;-&nbsp;21:00&nbsp;
                      </td>
                      <td>
                        Conference name 6
                        <br />
                        por 
                        <br />
                        Autor 6
                      </td>
                      
                    </tr>
                  </table>
                  <p>
                    Como siempre y en todas las reuniones en las instalaciones
                    de LinuxCabal, tenemos bebidas, cerveza y el famoso
                    SpaghettiCabal que está preparado con una salsa ragu de
                    jitomate, cebolla, pimiento verde, ajo, queso y carne.
                  </p>
                  <p>
                    Es una oportunidad única para encontrarte
                    con los miembros de las comunidades de F/OSS
                    y GNU &amp; Linux que existen aquí en
                    Guadalajara.
                  </p>
                  <p style=\"font:22pt helvetica; color:#071b00;
                             text-align: center\">
                    <br />
                    Ven a APRENDER, ENSEÑAR y SOCIALIZAR
                  </p>" );
        else
          print( "<p class=\"SubTitleFont\" style=\"text-align: center;\">
                     (FLOSS Conference Day LinuxCabal)
                     <br />
                     <a href=\"http://www.linuxcabal.org/DiaDeConf20240928.php?Lang=es&From=Eventos\"><img src=\"images/flossconferenceday-linuxcabal.svg\" alt=\"FLOSS Conference Day LinuxCabal.svg\" /></a>
                  </p>
                  <p>
                    FLOSS Conference Day LinuxCabal is an event and
                    initiative of the Open Source community of Guadalajara.
                    Its purpose is to promote
                    the use of FLOSS and the integration of communities of FLOSS users in Mexico.
                    LinuxCabal has always been open to the open source community in Mexico and has been part of the history
                    and growth of Open Source in Guadalajara in particular.
                    Several luminaries of the world of Open Source have come to Linux Cabal
                    and this event is a way to recognize the importance and consistency
                    that LinuxCabal brings to the F/OSS community in Mexico.
                  </p>
                  <p style=\"font:bold 18pt helvetica; color:#000000;
                             text-align: center;\">
                      Saturday September 28, 2024
                    <br />
                    <br />
                    <a href=\"Mapa.php?Lang=$Lang&amp;From=$From\">At the
                              LinuxCabal headquarters</a>
                    <br />
                    <br />
                    from 15:00 to 21:00 hrs.
                  </p>
                  <p class=\"SubTitleFont\" style=\"text-align: center;\">
                    Admission is FREE
                  </p>
                  <p>
                    If you are interested in meeting others in the
                    community, you are welcome. If you are unfamiliar
                    with F/OSS and/or GNU &amp; Linux, you are welcome.
                  </p>
                  <p>
                    If you want to install F/OSS programs and/or GNU &amp;
                    Linux in
                    your machine today, don't forget your monitor, keyboard
                    and your mouse. We will have the Install Fest at the
                    LinuxCabal headquarters from 15:00 to 21:00 hrs.
                  </p>
                  <p>
                    We have Mageia and Fedora.
                    If you desire to install some other distribution
                    of GNU &amp; Linux, bring your disks and we will help
                    as we can.
                  </p>
                    <p style=\"font:24pt helvetica; color:#000000;
                       text-align: center;\">
                    <strong>Program</strong>
                  </p>

                  <table style=\"border-width:thick; border-style:ridge;
                               text-align:center; width:95%; margin:0 auto;\" >
                    <tr style=\"background-color: #DDDDDD\">
                      <th style='width:20%'>
                        Hora
                      </th>
                      <th colspan=\"2\" style='width:60%';>
                        Ponencias
                      </th>
              
                    </tr>

                    <tr style=\"text-align: center\">
                      <td>
                        &nbsp;15:00&nbsp;-&nbsp;16:00&nbsp;
                      </td>
                      <td>
                        Conference name 1
                        <br />
                        por
                        <br />
                        Autor 1
                      </td>
                    </tr>

                    <tr style=\"text-align: center\">
                      <td>
                        &nbsp;16:00&nbsp;-&nbsp;17:00&nbsp;
                      </td>
                      <td>
                        <br />
                        Conference name 2
                        <br />
                        por
                        <br />
                        Autor 2
                      </td>
                    </tr>

                    <tr style=\"text-align: center\">
                      <td>
                        &nbsp;17:00&nbsp;-&nbsp;18:00&nbsp;
                      </td>
                      <td>
                        Conference name 3
                        <br />
                        por 
                        <br />
                        Autor 3
                      </td>

                      <td rowspan=\"3\" style=\"background:#bdff22;
                                                margin:25px auto;\">
                        D
                        <br />
                        I
                        <br />
                        N
                        <br />
                        N
                        <br />
                        N
                        <br />
                        E
                        <br />
                        R
                      </td>
                    </tr>

                    <tr style=\"text-align: center\">
                      <td>
                        &nbsp;18:00&nbsp;-&nbsp;19:00&nbsp;
                      </td>
                      <td>
                        Conference name 4
                        <br />
                        por 
                        <br />
                        Autor 4
                      </td>
                    </tr>

                    <tr style=\"text-align: center\">
                      <td>
                        &nbsp;19:00 - 20:00&nbsp;
                      </td>
                      <td>
                        Conference name 5
                        <br />
                        por 
                        <br />
                        Autor 5
                      </td>
                    </tr>

                    <tr style=\"text-align: center\">
                      <td>
                        &nbsp;20:00&nbsp;-&nbsp;21:00&nbsp;
                      </td>
                      <td>
                        Conference name 6
                        <br />
                        por 
                        <br />
                        Autor 6
                      </td>
                      
                    </tr>
                  </table>
                  <p>
                    As in all of our reunions at LinuxCabal, we have Soft
                    Drinks, Beer and our famous
                    SpaghettiCabal which is prepared with a ragu tomato sauce,
                    cheese and meat.  Served with bread.
                  </p>
                  <p style=\"font:12pt helvetica; color:#000000;
                     text-align: Left\">
                    Dont miss this opportunity to meet the members of
                    the GNU &amp; Linux and F/OSS community in
                    Guadalajara.
                  </p>
                  <p style=\"font:22pt helvetica; color:#071b00;
                             text-align: center\">
                    <br />
                    Come to \"LEARN\", \"TEACH\" and \"SOCIALIZE\"
                  </p>" );
      ?>
    </div>
    <div class="content-footer">
      <?php
        include( "./includes/incCommonFooter.php" );
      ?>
    </div>
  </body>
</html>
