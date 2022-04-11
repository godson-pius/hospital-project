<?php
//Admin Functions

function login($post) {
  global $link;

  $errors = [];
  extract($post);

  if (!empty($email)) {
      $admin_email = sanitize($email);
  } else {
      $errors[] = "Specify an email";
  }

  if (!empty($password)) {
      $tmp_admin_password = sanitize($password);
      $admin_password = sha1($tmp_admin_password);
  } else {
      $errors[] = "Specify a password";
  }

  if (!$errors) {
      $sql = "SELECT * FROM admins WHERE email = '$admin_email'";
      $query = mysqli_query($link, $sql);

      if (mysqli_num_rows($query) > 0) {
          $rows = mysqli_fetch_assoc($query);

          if ($rows['password'] === $admin_password) {
              if (isset($remember)) {
                  setcookie("admin_email", $admin_email, time() + (345600 * 30), "/");
                  setcookie("admin_password", $admin_password, time() + (345600 * 30), "/");
              }
              $_SESSION['admin'] = $rows['id'];
              return true;
          } else {
            return false;
          }
      } else {
          $errors[] = "Invalid credentials";
      }
  } else {
    return $errors;
  }


}

function register($post) {
  global $link;

  $errors = [];
  extract($post);

  if (!empty($fullname)) {
      $fullname = sanitize($fullname);
  } else {
    $errors = "Fullname is empty";
  }

  if (!empty($email)) {
      $email = sanitize($email);
  } else {
    $errors = "Email is empty";
  }

  if (!empty($username)) {
      $username = sanitize($username);
  } else {
    $errors = "Username is empty";
  }

  if (!empty($password)) {
      $password = sanitize($password);
  } else {
    $errors = "Password is empty";
  }

  if (!empty($confirm_password)) {
      $confirm_password = sanitize($confirm_password);
  } else {
    $errors = "Confirm Password is empty";
  }

  if ($password === $confirm_password) {
      $user_pwd = sha1($confirm_password);
  } else {
    $errors = "Passwords do not match";
  }

  $sql = "INSERT INTO admins (fullname, email, username, password) VALUES ('$fullname', '$email', '$username', '$user_pwd')";

  $query = mysqli_query($link, $sql);

  if ($query) {
      return true;
  } else {
    return false;
  }


}

function getAdmin($id) {
  global $link;

  $sql = "SELECT * FROM admins WHERE id = $id";
  $query = mysqli_query($link, $sql);

  if (mysqli_num_rows($query) > 0) {
      return $query;
  } else {
    return false;
  }
}

function editAdmin($post, $id) {
  global $link;
  $errors = [];

  extract($post);

  $fullname = sanitize($fullname);
  $email = sanitize($email);
  $username = sanitize($username);

  if (!empty($password)) {
      $password = sanitize($password);
  }

  if (!empty($confirm_password)) {
      $confirm_password = sanitize($confirm_password);
  }

  if ($password === $confirm_password) {
      $admin_pwd = sha1($password);
  } else {
    $errors = "Passwords do not match!";
  }

  if (!$errors) {
      $sql = "UPDATE admins SET fullname = '$fullname', email = '$email', username = '$username', password = '$admin_pwd' WHERE id = $id";

      $query = mysqli_query($link, $sql);

      if ($query) {
        return true;
      } else {
        return false;
      }
  } else {
    return $errors;
  }


}

function changePassword($post, $id) {
  global $link;

  $errors = [];
  extract($post);

  if (!empty($password)) {
      $password = sha1(sanitize($password));
  } else {
    $errors = "Password is empty";
  }

  if (!$errors) {
    $sql = "UPDATE admins SET password = '$password' WHERE id = $id";
    $query = mysqli_query($link, $sql);

    if ($query) {
        return true;
    } else {
      return false;
    }
  }
}

function addDoctor($post) {
    global $link;

    $errors = [];
    extract($post);

    if (!empty($fname)) {
        $firstname = sanitize($fname);
    } else {
      $errors[] = "Firstname is empty";
    }

    if (!empty($lname)) {
        $lastname = sanitize($lname);
    } else {
      $errors[] = "Lastname is empty";
    }

    if (!empty($lname)) {
        $lastname = sanitize($lname);
    } else {
      $errors[] = "Lastname is empty";
    }

    if (!empty($email)) {
        $email = sanitize($email);
    } else {
      $errors[] = "Email is empty";
    }

    if (!empty($phone)) {
        $phone = sanitize($phone);
    } else {
      $errors[] = "Phone is empty";
    }

    if (!empty($speciality)) {
        $speciality = sanitize($speciality);
    } else {
      $errors[] = "Speciality is empty";
    }

    if (!empty($facebook)) {
        $facebook = sanitize($facebook);
    } else {
      $errors[] = "Facebook link is empty";
    }

    if (!empty($twitter)) {
        $twitter = sanitize($twitter);
    } else {
      $errors[] = "Twitter link is empty";
    }

    if (!empty($google)) {
        $google = sanitize($google);
    } else {
      $errors[] = "Google link is empty";
    }

    if (!empty($instagram)) {
        $instagram = sanitize($instagram);
    } else {
      $errors[] = "Instagram link is empty";
    }

    if (!empty($password)) {
        $password = sanitize($password);
    } else {
      $errors[] = "Password is empty";
    }

    if (!empty($confirm_password)) {
        $confirm_password = sanitize($confirm_password);
    } else {
      $errors[] = "Confirm your password";
    }

    if (!empty($about)) {
        $about = sanitize($about);
    } else {
      $errors[] = "About doctor is empty";
    }

    if ($password === $confirm_password) {
        $user_pwd = sha1($confirm_password);
    } else {
      $errors[] = "Password do not match";
    }

    $fullname = $fname . " " . $lname;


    if (!$errors) {
        $sql = "INSERT INTO doctors (fullname, speciality, email, description, facebook, twitter, google, instagram, phone, password) VALUES ('$fullname', '$speciality', '$email', '$about', '$facebook', '$twitter', '$google', '$instagram', '$phone', '$user_pwd')";

        $query = mysqli_query($link, $sql);

        if ($query) {
            return true;
        } else {
          return false;
        }
    } else {
      return $errors;
    }


}

function getDoctors() {
  global $link;

  $sql = "SELECT * FROM doctors";
  $query = mysqli_query($link, $sql);

  if (mysqli_num_rows($query) > 0) {
      return $query;
  } else {
    return false;
  }
}

function getTotalNum($table) {
    global $link;

    $sql = "SELECT * FROM $table";
    $query = mysqli_query($link, $sql);

    if ($query) {
        $totalNum = mysqli_num_rows($query);

        return $totalNum;
    } else {
        return false;
    }
}


//Doctor Functions
function loginDoctor($post) {
  global $link;

  $errors = [];
  extract($post);

  if (!empty($email)) {
      $doctor_email = sanitize($email);
  } else {
      $errors[] = "Specify an email";
  }

  if (!empty($password)) {
      $tmp_doctor_password = sanitize($password);
      $doctor_password = sha1($tmp_doctor_password);
  } else {
      $errors[] = "Specify a password";
  }

  if (!$errors) {
      $sql = "SELECT * FROM doctors WHERE email = '$doctor_email'";
      $query = mysqli_query($link, $sql);

      if (mysqli_num_rows($query) > 0) {
          $rows = mysqli_fetch_assoc($query);

          if ($rows['password'] === $doctor_password) {
              if (isset($remember)) {
                  setcookie("doctor_email", $doctor_email, time() + (345600 * 30), "/");
                  setcookie("doctor_password", $doctor_password, time() + (345600 * 30), "/");
              }
              $_SESSION['doctor'] = $rows['id'];
              return true;
          } else {
            return "Invalid credentials";
          }
      } else {
          return "Invalid credentials";
      }
  } else {
    return $errors;
  }


}

function getTotalNumAppointment($table, $doc) {
    global $link;

    $sql = "SELECT * FROM $table WHERE booked_doctor = '$doc'";
    $query = mysqli_query($link, $sql);

    if ($query) {
        $totalNum = mysqli_num_rows($query);

        return $totalNum;
    } else {
        return false;
    }
}

function getDoctorsAppointment($doc) {
  global $link;

  $sql = "SELECT * FROM appointments WHERE booked_doctor = '$doc'";
  $query = mysqli_query($link, $sql);

  if (mysqli_num_rows($query) > 0) {
      return $query;
  } else {
    return false;
  }
}

function getAppointment($id) {
  global $link;

  $sql = "SELECT * FROM appointments WHERE id = '$id'";
  $query = mysqli_query($link, $sql);

  if (mysqli_num_rows($query) > 0) {
      return $query;
  } else {
    return false;
  }
}


//Patient Functions
function loginUser($post) {
  global $link;

  $errors = [];
  extract($post);

  if (!empty($email)) {
      $user_email = sanitize($email);
  } else {
      $errors[] = "Specify an email";
  }

  if (!empty($password)) {
      $tmp_user_password = sanitize($password);
      $user_password = sha1($tmp_user_password);
  } else {
      $errors[] = "Specify a password";
  }

  if (!$errors) {
      $sql = "SELECT * FROM users WHERE email = '$user_email'";
      $query = mysqli_query($link, $sql);

      if (mysqli_num_rows($query) > 0) {
          $rows = mysqli_fetch_assoc($query);

          if ($rows['password'] === $user_password) {
              if (isset($remember)) {
                  setcookie("user_email", $user_email, time() + (345600 * 30), "/");
                  setcookie("user_password", $user_password, time() + (345600 * 30), "/");
              }
              $_SESSION['user'] = $rows['user_id'];
              return true;
          } else {
            return "Invalid credentials";
          }
      } else {
          return "Invalid credentials";
      }
  } else {
    return $errors;
  }


}

function bookAppointment($post) {
  global $link;
  $errors = [];
  extract($post);

  if (!empty($p_name)) {
    $p_name = sanitize($p_name);
  } else {
    $errors[] = "Patient name is required!";
  }

  if (!empty($p_email)) {
    $p_email = sanitize($p_email);
  } else {
    $errors[] = "Patient email is required!";
  }

  if (!empty($p_dob)) {
    $p_dob = sanitize($p_dob);
  } else {
    $errors[] = "Patient date of birth is required!";
  }

  if (!empty($p_phone)) {
    $p_phone = sanitize($p_phone);
  } else {
    $errors[] = "Patient phone number is required!";
  }

  if (!empty($p_gender)) {
    $p_gender = sanitize($p_gender);
  } else {
    $errors[] = "Patient gender is required!";
  }

  if (!empty($service)) {
    $service = sanitize($service);
  } else {
    $errors[] = "Service is required!";
  }

  if (!empty($b_date)) {
    $b_date = sanitize($b_date);
  } else {
    $errors[] = "Date for appointment is required!";
  }

  if (isset($doctor)) {
    $doctor = sanitize($doctor);
  } else {
    $errors[] = "Please choose a doctor!";
  }

  if (!empty($p_note)) {
    $p_note = sanitize($p_note);
  } else {
    $errors[] = "Patient note is required!";
  }

  $user_id = $_SESSION['user'];

  if (!$errors) {
    $sql = "INSERT INTO appointments (user_id, patient_name, patient_email, patient_dob, patient_phone, patient_gender, service, booked_date, booked_doctor, patient_note) VALUES ('$user_id', '$p_name', '$p_email', '$p_dob', '$p_phone', '$p_gender', '$service', '$b_date', '$doctor', '$p_note')";

    $sql_query = mysqli_query($link, $sql);

    if ($sql_query) {
      return true;
    } else {
      return false;
    }
  } else {
    return $errors;
  }

}

function getAllTableContent($table) {
  global $link;

  $sql = "SELECT * FROM $table";
  $sql_query = mysqli_query($link, $sql);

  if (mysqli_num_rows($sql_query) > 0) {
    return $sql_query;
  } else {
    return false;
  }
}

function registerUser($post) {
  global $link;

  $errors = [];
  extract($post);

  if (!empty($fullname)) {
      $fullname = sanitize($fullname);
  } else {
    $errors[] = "Lastname is empty";
  }

  if (!empty($email)) {
      $email = sanitize($email);
  } else {
    $errors[] = "Email is empty";
  }

  if (!empty($dob)) {
      $dob = sanitize($dob);
  } else {
    $errors[] = "Date of birth is empty";
  }

  if (!empty($password)) {
      $password = sanitize($password);
  } else {
    $errors[] = "Password is empty";
  }

  if (!empty($confirm_password)) {
      $confirm_password = sanitize($confirm_password);
  } else {
    $errors[] = "Confirm your password";
  }

  if ($password === $confirm_password) {
      $user_pwd = sha1($confirm_password);
  } else {
    $errors[] = "Password do not match";
  }


  if (!$errors) {
      $sql = "INSERT INTO users (fullname, email, dob, password) VALUES ('$fullname', '$email', '$dob', '$user_pwd')";

      $query = mysqli_query($link, $sql);

      if ($query) {
          return true;
      } else {
        return false;
      }
  } else {
    return $errors;
  }

}

function getUsersAppointment($user) {
  global $link;

  $sql = "SELECT * FROM appointments WHERE user_id = '$user'";
  $query = mysqli_query($link, $sql);

  if (mysqli_num_rows($query) > 0) {
      return $query;
  } else {
    return false;
  }
}

function getTotalUserAppointment($table, $doc) {
  global $link;

  $sql = "SELECT * FROM $table WHERE user_id = '$doc'";
  $query = mysqli_query($link, $sql);

  if ($query) {
      $totalNum = mysqli_num_rows($query);

      return $totalNum;
  } else {
      return false;
  }
}
