<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>A simple, clean, and responsive HTML invoice template</title>

    <style>
    .invoice-box {
        max-width: 830px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }

    .invoice-box table {
        width: 100%;

    }



    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.top table td.title {
        font-size: 45px;

    }

    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }

    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }

    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }

    .invoice-box table tr.item.last td {
        border-bottom: none;
    }

    .invoice-box table tr.total td:nth-child(3) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }

    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }

        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }

    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }

    .rtl table {
        text-align: right;
    }



    </style>
</head>

<body>
    <div class="invoice-box">
        <table>
            <tr class="top">

                <td colspan="4">
                    <table>
                        <tr>
                            <td class="title">
                            <div style="font-size:30px; font-weight:bold;text-align: center; z-index: 1;">BOULANGERIE-PATISSERIE LE KADIOR</div>
                            <div style="font-size:20px; font-weight:bold;text-align: center; z-index: 1;">Keur Mbaye Fall</div>
                            <div style="font-size:20px; font-weight:bold;text-align: center; z-index: 1;">Arrét Djoumadji Tally Carreaux 2</div>
                            <div style="font-size:20px; font-weight:bold;text-align: center; z-index: 1;">77 889 22 73</div>
                            </td>
                            <tr>
                            <td>
                                FACTURE COMMANDE n°:147593<br>
                                DATE COMMANDE : 15/12/1998<br>

                            </td>
                            </tr>
                        </tr>
                    </table>
                </td>
            </tr>

       
            <tr class="heading">
                <td style="text-align: center">
                   Désignation
                </td>

                <td style="text-align: center">
                   Nombre
                </td>
                 <td style="text-align: center">
                   Prix U
                </td>
                 <td style="text-align: center">
                  Total
                </td>


            </tr>
            @for ($x = 0; $x < 3; $x++)
            <tr class="details">
                <td style="text-align: center">
                  dddd
                </td>

                <td style="text-align: center">
                dddd
                </td>
                 <td style="text-align: center">
                 dddd
                </td>
                 <td style="text-align: center">
                 dddd
                </td>
            </tr>
            @endfor

        </table>
        <h2>Montant Total : 74589 Fcfa</h2>
        <br>
        <p style=font-size:10px;padding-letf:20px;>Merci pour la confiance Boulagerie Le Kadior !</p>
      
    </div>
</body>
</html>
