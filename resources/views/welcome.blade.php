<html lang="en">
<head>
    <title>My Web</title>
</head>
<body>
        <h1>{{$data->deptname}} Department</h1>
        <h3>Departent Id: {{$data->deptno}}</h3>
        @foreach($data->course as $dc)
            <h2>{{$dc->course_name}}</h2><br>
            <?php $ts=\App\Models\TeacherCourse::where('c_id',$dc->course_id)->get();?>
            <h3>Teacher List</h3>
            @foreach($ts as $st)
                <?php $td=\App\Models\Teacher::where('teacher_id',$st->t_id)->get(); ?>
                @foreach($td as $tn)
                    <h3>{{$tn->teacher_name}}</h3> <br
                    ><h4>Student List</h4>
                    <?php $st=\App\Models\StudentCourse::where('c_id',$st->c_id)->get(); ?>
                    @foreach($st as $sdt)
                        {{$sdt->student->name}} <br>
                    @endforeach

                @endforeach
            @endforeach

        @endforeach




</body>
</html>
