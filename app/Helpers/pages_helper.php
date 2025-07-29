<?php

function base($page, $data)
{
  return view('Student/' . $page, $data);
}

function page($page, $data)
{
  if (!session()->get('isLoggedIn')) {
    return redirect()->to('/');
  }

  if (Auth()['role'] == 'teacher') {
    return view('Teacher/' . $page, $data);
  } else {
    return view('Student/' . $page, $data);
  }
}

function teacher($page, $data)
{
  return view('Teacher/' . $page, $data);
}

function student($page, $data)
{
  return view('Student/' . $page, $data);
}

function export($page, $data)
{
  return view('Export/' . $page, $data);
}

function teacher_base()
{
  return 'Templates/Teacher/base';
}

function student_base()
{
  return 'Templates/Student/base';
}

function export_base()
{
  return 'Templates/Export/base';
}
