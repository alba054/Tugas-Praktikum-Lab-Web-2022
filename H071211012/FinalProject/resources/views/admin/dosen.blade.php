@extends('template.layout')

@section('title', 'Dosen')

@section('content')
    <div class="container">
        <h1><strong>The Art of Dosen Testing</strong></h1>
    </div>

    <div class="table_content">
        <div class="container">
            <div class="table-responsive custom-table-responsive px-3">
                <table class="table custom-table">
                    <thead>
                        <br>
                        <tr class="bg-dark head_table">
                            <th scope="col">No</th>
                            <th scope="col">Order</th>
                            <th scope="col">Name</th>
                            <th scope="col">Occupation</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Education</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr scope="row">
                            <th scope="row">1</th>
                            <td>1392</td>
                            <td><a href="#">James Yates</a></td>
                            <td>
                                Web Designer
                                <small class="d-block">Far far away, behind the word mountains</small>
                            </td>
                            <td>+63 983 0962 971</td>
                            <td>NY University</td>
                        </tr>
                        <tr class="table_spacer">
                            <td colspan="10"></td>
                        </tr>
                        <tr scope="row" class="row_table">
                            <th scope="row">2</th>
                            <td>1392</td>
                            <td><a href="#">James Yates</a></td>
                            <td>
                                Web Designer
                                <small class="d-block">Far far away, behind the word mountains</small>
                            </td>
                            <td>+63 983 0962 971</td>
                            <td>NY University</td>
                        </tr>
                        <tr class="table_spacer">
                            <td colspan="10"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
