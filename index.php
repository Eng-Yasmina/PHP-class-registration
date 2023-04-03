<!DOCTYPE html>
<html>
    <head>
        <title>CMS class</title>
        <style>
        .cms {
            color: red; 
            } 
            </style>
    </head>
    <body>
        <h1> Application name: PHP class registration</h1>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php $students = [ ['name' => 'Alaa', 'email' => 'ahmed@test.com', 'status' => 'CMS'], ['name' => 'Shamy', 'email' => 'ali@test.com', 'status' => 'OS'], ['name' => 'Youssef', 'email' => 'basem@test.com', 'status' => 'OS'], ['name' => 'Waleid', 'email' => 'farouk@test.com', 'status' => 'CMS'], ['name' => 'Rahma', 'email' => 'hany@test.com', 'status' => 'OS'] ]; ?>
                <?php foreach($students as $student): //loop on each parameter and inset it in a row in the table?>
                    <tr <?php if($student['status'] == 'CMS') echo 'class="cms"'; ?>>
                        <td><?php echo $student['name']; ?></td>
                        <td><?php echo $student['email']; ?></td>
                        <td><?php echo $student['status']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
    </html> 