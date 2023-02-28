@extends('layouts.app-user')
@section('contenu')
    <div class="back_re">
        <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                       <h2>Le Classement</h2>
                  </div>
               </div>
            </div>
        </div>
    </div>
    <div class="classes">
         <div class="container">
            <div class='card'>
                <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="bg-dark" style="color:white; text-align:center">
                        <th>Ordre</th>
                        <th>Institution</th>
                        <th>Médaille d'Or</th>
                        <th>Médaille de Bronze</th>
                        <th>Médaille d'Argent</th>
                        <th>Total</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>UN</td>
                            <td>01</td>
                            <td>01</td>
                            <td>02</td>
                            <td>02</td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>UN</td>
                            <td>01</td>
                            <td>01</td>
                            <td>02</td>
                            <td>02</td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
         </div>
      </div>
@endsection