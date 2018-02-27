@extends('layout.default')
        @section('content')

            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Sender</th>
                    <th scope="col">From:Email</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Diana</td>
                    <th scope="col">name1@yahoo.com</th>
                    <td><a href="/classschedule" target="_self">Class Schedule</a></td>
                    <th> <button class="btn btn-primary" type="delete">Delete</button></th>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <th scope="col">name2@yahoo.com</th>
                    <td><a href="/airlinetickets" target="_self">Airline Tickets</a></td>
                    <th> <button class="btn btn-primary" type="delete">Delete</button></th>
                </tr>

                </tbody>
            </table>


        @endsection

