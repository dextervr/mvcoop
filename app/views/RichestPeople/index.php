<main>
<h1>De vijf rijkste mensen ter wereld</h1>
<style>
  main {
    margin: 0 auto;
    width: 80%;
  }

  table{
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 80%;
  }

  th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #04AA6D;
    color: white;
  }

  td, th {
    border: 1px solid #ddd;
    padding: 8px;
  }

  tr:nth-child(even){background-color: #f2f2f2;}

  tr:hover {background-color: #ddd;}

</style>




<table>
  <thead>
    <th>naam</th>
    <th>vermogen</th>
    <th>leeftijd</th>
    <th>bedrijf</th>
    <th>delete</th>

  </thead>
  <tbody><!-- called from controllers -->
    <?=$data['RichestPeople']?>
  </tbody>
</table>

</main>
