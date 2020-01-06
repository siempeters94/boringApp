@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome to the boring app</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>


                      <table id="ActivityTable">
                      <tr>
                        <td id="ActivityTableFirstCol">Activity</td>
                        <td>{{$result['activity']}}</td>
                      </tr>
                      <tr>
                        <td id="ActivityTableFirstCol">Accessibility</td>
                        <td>
                          @php $rating = $result['accessibility']; @endphp
                          <div class="placeholder" style="color: lightgray;">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                          </div>

                          <div class="overlay" style="position: relative;top: -22px;">

                                @while($rating>0)
                                    @if($rating >0.5)
                                        <i class="fa fa-star checked"></i>
                                    @else
                                        <i class="fa fa-star-half checked"></i>
                                    @endif
                                    @php $rating--; @endphp
                                @endwhile

                            </div>

                        </td>
                      </tr>
                      <tr>
                        <td id="ActivityTableFirstCol">Type</td>
                        <td>{{$result['type']}}</td>
                      </tr>
                      <tr>
                        <td id="ActivityTableFirstCol">Participants</td>
                        <td>{{$result['participants']}}</td>
                      </tr>
                      <tr>
                        <td id="ActivityTableFirstCol">Price</td>
                        <td>
                          @php $rating = $result['price']; @endphp
                          <div class="placeholder" style="color: lightgray;">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                          </div>

                          <div class="overlay" style="position: relative;top: -22px;">

                                @while($rating>0)
                                    @if($rating >0.5)
                                        <i class="fa fa-star checked"></i>
                                    @else
                                        <i class="fa fa-star-half checked"></i>
                                    @endif
                                    @php $rating--; @endphp
                                @endwhile

                            </div>
                        </td>
                      </tr>
                    </table>


                    </div>


                    <button type="button" onclick="window.location='{{ url("home") }}'">Get new activity</button>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
