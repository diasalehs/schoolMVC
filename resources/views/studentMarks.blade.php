@extends('student')

@section('content')
    <div class="page-header">
        <h1>العلامات <small></small></h1>
    </div>


    <table class="table table-bordered text-center">
        <thead>
        <tr class="success">
            <th  >اسم المادة</th>
            <th >الاول</th>
            <th >الثاني</th>
            <th >الشهرين</th>
            <th >الثالث</th>
            <th >الرابع</th>
            <th >النهائي</th>
        </tr>
        </thead>
        <tbody id="test">
        <tr>
            <td>رياضيات</td>
            <td>10</td>
            <td >10</td>
            <td >20</td>
            <td >10</td>
            <td >10</td>
            <td >
                40
            </td>

        </tr>

        </tbody>
    </table>





@endsection