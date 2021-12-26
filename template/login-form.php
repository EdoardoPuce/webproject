<form action="#" method="POST">
     <h2>Accedi</h2>
     <p> Non sei ancora registrato?</p>
     <p><a href="registrati.php"> Registrati qui</a></p>
     <?php if(isset($templateParams["errorelogin"])): ?>
     <p><?php echo $templateParams["errorelogin"]; ?></p>
     <?php endif; ?>
     <ul>
          <li>
              <label for="email">Email:</label>
              <input type="text" id="email" name="email" />
            </li>
            <li>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password"/>
            </li>
            <li>
                <input type="submit" name="submit" value="Accedi"/>
                </li>
            </ul>
 </form>