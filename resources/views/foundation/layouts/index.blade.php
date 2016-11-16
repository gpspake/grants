@extends('foundation.layouts.master')

@section('page-header')
    <header class="intro-header">
        <div class="container">
            <div class="row">
                <div class="medium-12 columns">
                    <div class="site-heading">
                        <h1>{{ config('grants.title') }}</h1>
                        <hr class="small">
                        <h2 class="subheading">{{ 'subtitle' }}</h2>
                    </div>
                </div>
            </div>
        </div>

    </header>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="medium-12 columns">

                <table id="grants-table" style="width:100%">
                    <thead>
                    <tr>
                        <th >Title</th>
                        <th>Grant Maker</th>
                        <th>Grant Program</th>
                        <th>Letter of Intent Deadline</th>
                        <th>Limited Submission Deadline</th>
                        <th>Status</th>
                        <th>Maximum Award</th>
                    </tr>
                    </thead>
                    <tbody>
                    <ul class="nav nav-pills">
                        <ul class="nav nav-pills">

                        </ul>
                    </ul>
                    <tr>
                        <td><a href="/grants/sit-nihil-hic">sit nihil hic</a></td>
                        <td><a href="http://www.Mraz.com/et-totam-consectetur-ut-ipsam-quibusdam-sunt-et-ut.html" >culpa</a></td>
                        <td><a href="https://Veum.com/ut-eos-sit-et-ipsa.html" >nihil</a></td>
                        <td data-order="2016-02-24 21:32:59">
                            February 24, 2016
                        </td>
                        <td data-order="2015-03-24 15:52:29">
                            March 24, 2015
                        </td>
                        <td>
                            Closed
                        </td>
                        <td>
                            $13,969,838.63
                        </td>
                    </tr>

                    <tr>
                        <td><a href="/grants/inventore-ea-beatae-illo-nostrum">inventore ea beatae illo nostrum</a></td>
                        <td><a href="http://www.Toy.biz/autem-aut-itaque-consequuntur-officiis-rerum-dolore-similique.html" >sit</a></td>
                        <td><a href="http://Ratke.org/minima-ut-eum-beatae-numquam" >nulla</a></td>
                        <td data-order="2015-08-14 01:08:51">
                            August 14, 2015
                        </td>
                        <td data-order="2015-05-31 14:18:46">
                            May 31, 2015
                        </td>
                        <td>
                            Open
                        </td>
                        <td>
                            $9,313,225.75
                        </td>
                    </tr>

                    <tr>
                        <td><a href="/grants/iusto-blanditiis-quos">iusto blanditiis quos</a></td>
                        <td><a href="http://Swaniawski.com/fugiat-est-reprehenderit-facere-voluptate-quis-accusamus" >modi</a></td>
                        <td><a href="http://www.Bahringer.net/assumenda-aperiam-labore-reiciendis" >blanditiis</a></td>
                        <td data-order="2015-02-03 13:59:31">
                            February 03, 2015
                        </td>
                        <td data-order="2015-09-03 04:48:57">
                            September 03, 2015
                        </td>
                        <td>
                            Closed
                        </td>
                        <td>
                            $18,626,451.50
                        </td>
                    </tr>

                    <tr>
                        <td><a href="/grants/ducimus-ducimus-repellendus-et">ducimus ducimus repellendus et</a></td>
                        <td><a href="https://www.Veum.biz/ea-amet-aspernatur-quos-est-unde" >est</a></td>
                        <td><a href="http://Kemmer.com/ut-et-adipisci-doloribus-quis-unde-ut-quibusdam-cumque" >et</a></td>
                        <td data-order="2015-04-11 23:57:30">
                            April 11, 2015
                        </td>
                        <td data-order="2015-12-19 02:29:32">
                            December 19, 2015
                        </td>
                        <td>
                            Closed
                        </td>
                        <td>
                            $23,283,064.38
                        </td>
                    </tr>

                    <tr>
                        <td><a href="/grants/quaerat-tempore-maiores">quaerat tempore maiores</a></td>
                        <td><a href="http://www.Keeling.com/voluptates-ab-quisquam-voluptatem-sequi-molestiae-quo-optio" >ut</a></td>
                        <td><a href="http://Jacobs.com/maxime-deserunt-rerum-ducimus-aut-velit-id-consequuntur.html" >dolores</a></td>
                        <td data-order="2016-05-25 15:13:06">
                            May 25, 2016
                        </td>
                        <td data-order="2015-12-23 17:52:01">
                            December 23, 2015
                        </td>
                        <td>
                            Closed
                        </td>
                        <td>
                            $13,969,838.63
                        </td>
                    </tr>
                    </tbody>
                </table>

                {{-- The Pager --}}
                <ul class="pager">

                </ul>
            </div>

        </div>
    </div>
@stop

@section('scripts')
    <script>
        $(function() {
            $("#grants-table").DataTable({
                order: [[0, "desc"]]
            });
        });
    </script>

    <script>



    </script>
@stop