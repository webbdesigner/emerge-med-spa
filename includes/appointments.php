<section id="appointment">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-s-12 col-xs-12">
        <img src="images/salon1.jpg" />
        <img src="images/spa2.jpg" />
      </div>
      <div class="appt center col-lg-6 col-md-6 col-s-12 col-xs-12">
        <h2>
          Book an Appointment
        </h2>
        <img class="divider" src="images/g-divider.png">
        <p>
          <br />
          Don't delay... <br />
          book an appointment today!
        </p>
        <form method="POST" action="includes/form.php">
          <div class="form-group two-col">
            <label for="name">Name</label>
            <input name="name" type="text" id="name" placeholder="your name *" class="form-control">
          </div>
          <div class="form-group two-col">
            <label for="email">Phone</label>
            <input name="email" type="text" id="email" placeholder="phone number *" class="form-control">
          </div>
          <div class="form-group two-col">
            <label for="date">Date</label>
            <input name="date" type="text" id="date" placeholder="date *" class="form-control">
          </div>
          <div class="form-group two-col">
            <label for="service">Service</label>
            <select name="dropdown" id="dropdown" required>
              <option value=""
                hidden
                >select service</option>

                <!-- normal options -->
                <option value="Spa">Med Spa</option>
                <option value="Salon">Salon</option>
              </select>
          </div>
          <input class="btn-gold" type="submit" value="Book now!" id="input-submit" name="contact_submit">
        </form>
      </div>
    </div>
  </div>
</section>
