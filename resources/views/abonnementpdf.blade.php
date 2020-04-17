<?php
$cpt=0;
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>A simple, clean, and responsive HTML invoice template</title>

  <style>
  .filigrane{
 
    filter:alpha(opacity=1);
    opacity: 0.5;
    -moz-opacity:0.5;
     transform: rotate(45deg);
    }
    .FILI{
        position: absolute;
        height:100px;
         z-index: 4;
        font-size:30px;
       
    }
    .invoice{
        position: relative;
        border: 1px dotted black;
    }
  </style>
</head>

<body>

     

 <div >
  
 <table>
 @for ($a = 0; $a <$nbr ; $a++)
 <tr>
            @for ($p = 0; $p < 3; $p++)
            <?php $cpt++; ?>
            <td class="invoice">
           
            <table  >
            <tr >
          
            @if($cpt <= $nbrright)
            
            
            
                <td colspan="4"   >
                    <table style=width:220px>
                    
                        <tr>
                            <td colspan="4" >
                            <div style="font-size:10px; font-weight:bold;text-align: center; z-index: 1;">BOULANGERIE LE KADIOR</div>
                            <div style="font-size:10px; font-weight:bold;text-align: center; z-index: 1;">Keur Mbaye Fall</div>
                            <div style="font-size:10px; font-weight:bold;text-align: center; z-index: 1;">Arrét Djoumadji Tally Carreaux 2</div>
                            <div style="font-size:10px; font-weight:bold;text-align: center; z-index: 1;">77 889 22 73</div>
                          
                            <table>
                            <tr >
                         
                            <td   style="font-size:10px;margin-right:15px;border-right:1px dotted black; z-index: 1;">Abonner:  {{$ab[0]->nom}}</td>
                            <td   style="font-size:10px;margin-right:15px; z-index: 1;">N° Ticket:0007845</td>
                           
                            </tr>
                            <tr>
               
                            <td   style="font-size:10px;margin-left: 15px;border-right:1px dotted black;">Tel: {{$ab[0]->numero}}</td>
                            <td   style=font-size:10px;margin-left: 15px;>Date:{{$abc[0]->date}}</td>
                            </tr>
                            <tr>
                            <td style="font-size:10px;margin-right:15px;border-right:1px dotted black;">Ticket N°: {{$cpt}}</td>
                            <td style="font-size:10px;margin-right:15px;">Mois:{{$abc[0]->mois}}</td>
                            
                            </tr>
                            </table>
            
                            </td>
                        </tr>
                    </table>
                </td>
           
            </tr>
           
            
            <p class="FILI filigrane" >
                             LE KADIOR</p>
            <tr>
                <td style="font-size:10px; font-weight:bold;text-align: center;border:1px solid black;">
                    Désignation
                </td>

                <td style="font-size:10px; font-weight:bold;text-align: center; border:1px solid black;">
                   Nombre
                </td>
                 <td style="font-size:10px; font-weight:bold;text-align: center;border:1px solid black;">
                   Prix U
                </td>
                 <td style="font-size:10px; font-weight:bold;text-align: center;border:1px solid black;">
                   Total
                </td>


            </tr>
        
            @foreach($abcp as $d)
            <tr>
                <td style="font-size:10px;text-align: center">
                {{ $d->libelle }}
                </td>

                <td style="font-size:10px;text-align: center">
                {{ $d->nombre }}
                </td>
                 <td style="font-size:10px;text-align: center">
                 {{ $d->prix }} fr
                </td>
                 <td style="font-size:10px;text-align: center">
                 {{ $d->nombre* $d->prix }} fr
                </td>
               


            </tr>
            
            @endforeach
           

        </table>
        <p style=font-size:10px;font-weight:bold;margin-left:100px>Total:{{$abcp1[0]->somme}}  fr</p>
        <p style=font-size:10px;padding-letf:20px;>Merci pour la confiance Boulagerie Le Kadior !</p>
            </td>
            @endif
            @endfor
            </tr>
          
            @endfor
          
           
</table>    
    </div>
  
</body>

</html>
