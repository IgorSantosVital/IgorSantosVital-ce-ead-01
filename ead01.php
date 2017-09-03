<!DOCTYPE html>
 <html>
 <head>
  <meta charset="utf-8"/>
  <title>Trabalho PHP - Nutrição</title>
  <link rel="stylesheet" 
      type='text/css'
      href='./css/estilo.css'>
 </head>

    <?php
        $data1 = new DateTime('19800101');
        $data2 = new DateTime('19900228');
        $data3 = new DateTime('19850910');
        $data4 = new DateTime('19890904');
        $data5 = new DateTime('19781231');
        $idadeData1 = $data1->diff(new DateTime());
        $idadeData2 = $data2->diff(new DateTime());
        $idadeData3 = $data3->diff(new DateTime());
        $idadeData4 = $data4->diff(new DateTime());
        $idadeData5 = $data5->diff(new DateTime());

        $A= 2;

        $altura1 = 2.00;
        $altura2 = 1.72;
        $altura3 = 1.64;
        $altura4 = 1.73;
        $altura5 = 1.55;

        $potencia1         = pow($altura1, $A); 
        $potencia2         = pow($altura2, $A);
        $potencia3         = pow($altura3, $A);
        $potencia4         = pow($altura4, $A);
        $potencia5         = pow($altura5, $A);
        $IMC1              = (100/$potencia1);
        $IMC2              = (80/$potencia2);
        $IMC3              = (54/$potencia3);
        $IMC4              = (85/$potencia4);
        $IMC5              = (46/$potencia5);
        $IMCFormatada1     = number_format($IMC1, 0, ',', '.');
        $IMCFormatada2     = number_format($IMC2, 0, ',', '.');
        $IMCFormatada3     = number_format($IMC3, 0, ',', '.');
        $IMCFormatada4     = number_format($IMC4, 0, ',', '.');
        $IMCFormatada5     = number_format($IMC5, 0, ',', '.');
        
    ?>
    
    <body>
    
    <h1>Trabalho PHP - Nutrição</h1>
    
    <p> Considerando que A seja igual a 10 e B seja igual a 20, 
    eis os seguinte cálculos:
    </p>
        
      <table>
      <tr class='tituloTabela'>
        <th class='tituloTabela'>
        Nome
        </th>
        <th>
        Peso(kg)
        </th>
        <th>
        Altura(m)
        </th>
        <th>
        IMC
        </th>
        <th>
        Data de Nascimento
        </th>
        <th>
        Idade
        </th>     
      </tr> 
        <tr>
          <td>John Petrucci</td>
          <td>100</td> 
          <td>2.00</td> 
          <td> 
          <?php echo $IMCFormatada1;  ?>
          </td>
          <td>28/02/1987</td>
          <td> 
          <?php echo $idadeData1->y . " anos."; ?> 
          </td>
         </tr>
         
         <tr>
          <td>John Myung</td>
          <td>80</td> 
          <td>1.72</td> 
          <td>
          <?php echo $IMCFormatada2;  ?>
          </td>
          <td>28/02/1987</td>
          <td>
          <?php echo $idadeData2->y . " anos."; ?> 
          </td>
         </tr>
        
         <tr>
          <td>James Labrie</td>
          <td>54</td> 
          <td>1.64</td> 
          <td> 
          <?php echo $IMCFormatada3;  ?> 
          </td>
          <td>28/02/1987</td>
          <td> 
          <?php echo $idadeData3->y . " anos."; ?> 
          </td>
         </tr>
         
         <tr>
          <td>Jordan Rudess</td>
          <td>85</td> 
          <td>1.73</td> 
          <td> 
          <?php echo $IMCFormatada4;  ?> 
          </td>
          <td>28/02/1987</td>
          <td> 
          <?php echo $idadeData4->y . " anos."; ?> 
          </td>
         </tr>
         
         <tr>
          <td>Mike Mangini</td>
          <td>46</td> 
          <td>1.55</td> 
          <td> 
          <?php echo $IMCFormatada5;  ?> 
          </td>
          <td>28/02/1987</td>
          <td> 
          <?php echo $idadeData5->y . " anos."; ?>
          </td>
         </tr>
    </table>
          
          <div class="registrada"> &copy; 2010-<?php echo date("Y");?></div>
          
    </body>
 </html>