<div>
    <table>
        <tr>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Address</td>
            <td>City</td>
            <td>State</td>
            <td>Zip</td>
            <td>Country</td>
            <td>Username</td>
            <td>Password</td>
            <td>Role</td>
        </tr>
        <tr>
            <td><?php echo $user->getFirstName(); ?></td>
            <td><?php echo $user->getLastName(); ?></td>
            <td><?php echo $user->getEmail(); ?></td>
            <td><?php echo $user->getPhone(); ?></td>
            <td><?php echo $user->getAddress(); ?></td>
            <td><?php echo $user->getCity(); ?></td>
            <td><?php echo $user->getState(); ?></td>
            <td><?php echo $user->getZip(); ?></td>
            <td><?php echo $user->getCountry(); ?></td>
            <td><?php echo $user->getUsername(); ?></td>
            <td><?php echo $user->getPassword(); ?></td>
            <td><?php echo $user->getRole(); ?></td>
        </tr>
    </table>
</div>