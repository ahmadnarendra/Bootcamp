  <html>
  <head>
  <title>JSON testing - adiputra</title>
  <body>
       <p id="demo"></p>
  <script type='text/javascript'>
      var JSON_nrnd = {
                          name:'Narendra',
                          address:'Komplek Pelni Blok L1 No. 9',
                          hobbies:['Gaming','Sleeping','Coding'],
                          is_married:true,
                          school:[
                                  {highschool:'SMK', university:'Taruna Bhakti'},
                                  {highschool:'SMP', university:'Pesantren AL Hasanah Darunnajah 9'},
                                  {highschool:'SD', university:'SD Islam Pondok Duta'}
                          ],
                          skill:[
                                  {keahlian:'Design ', persen:'70'},
                                  {keahlian:'Coding ', persen:'65'},
                                  {keahlian:'Operator AV ', persen:'70'}

                          ],  

                     };

      var nikah;

      if(JSON_nrnd.is_married){
          nikah = "sudah nikah";
      }else{
          nikah = "belum nikah";
      }

      // document.write("Nama : "+JSON_nrnd.name+"<br/>");
      // document.write("Alamat : "+JSON_nrnd.address+"<br/>");
      // document.write("Hobi : "+JSON_nrnd.hobbies[0]+"<br/>" );
      // document.write("Status : "+nikah+"<br/>" );
      // document.write("List sekolah : <br />");
      // document.write("<ol>")
      // for(var i=0; i<JSON_nrnd.school.length; i++){
      //     document.write("<li>" + JSON_nrnd.school[i].highschool + " sekolah di " + JSON_nrnd.school[i].university + "</li>");
      // }
      // document.write("</ol>")
      // document.write("skill : <br />");
      // document.write("<ol>")
      // for(var i=0; i<JSON_nrnd.skill.length; i++){
      //     document.write("<li>" + JSON_nrnd.skill[i].keahlian + JSON_nrnd.skill[i].persen + " % " + "</li>");
      // }
      // document.write("</ol>")

      var myJSON = JSON.stringify(JSON_nrnd);
      document.getElementById("demo").innerHTML = myJSON;

  </script>
  </head>
  </body>
  </html>