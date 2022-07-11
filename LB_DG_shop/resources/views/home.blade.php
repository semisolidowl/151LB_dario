<!-- nicht selbst gemachter code -->
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('leder etui') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!-- ende nicht selbst gemachter code -->
                    <table>
                        <th><img src="../img/leder.jpg" alt="pic of leder etui" width="200" height="200"></th>
                        <th><h5>zubehör</h5>
                        <form>
                        <input type="checkbox" id="bleistift1" name="bleistift1" value="bleistift">
                        <label for="bleistift1"> bleistift</label><br>
                        <input type="checkbox" id="feder1" name="feder1" value="feder">
                        <label for="lineal1"> lineal</label><br>
                        <input type="checkbox" id="radiergummi1" name="radiergummi1" value="radiergummi">
                        <label for="radiergummi1"> radiergummi</label><br>
                        <input type="checkbox" id="spitzer1" name="spitzer1" value="spitzer">
                        <label for="spitzer1"> spitzer</label><br>
                        <input type="checkbox" id="zirkel1" name="zirkel1" value="zirkel">
                        <label for="zirkel1"> zirkel</label><br>
                        <input type="submit" value="zum warenkorb hinzufügen">
                        </form>
                        </th>
                    </table>
                    <!-- nicht selbst gemachter code -->
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('holtz etui') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    //ende nicht selbst gemachter code
                    <!--ende nicht selbst gemachter code -->
                    <table>
                        <th><img src="../img/holtz.jpg" alt="pic of etui" width="200" height="200"></th>
                        <th><h5>zubehör</h5>
                        <form>
                        <input type="checkbox" id="schere" name="schere" value="schere">
                        <label for="schere"> schere</label><br>
                        <input type="checkbox" id="feder" name="feder" value="feder">
                        <label for="feder"> feder</label><br>
                        <input type="checkbox" id="lineal" name="lineal" value="lineal">
                        <label for="lineal"> lineal</label><br>
                        <input type="checkbox" id="zirkel" name="zirkel" value="zirkel">
                        <label for="zirkel"> zirkel</label><br>
                        <input type="submit" value="zum warenkorb hinzufügen">
                        </form>
                        </th>
                    </table>
                    <!-- nicht selbst gemachter code -->
                
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
<!--ende nicht selbst gemachter code -->