<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>SpendWise</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="copyright" content="&COPY; 2022-2029" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />

    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Playfair+Display:wght@400;500;600&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="css/main.css" />
  </head>

  <body>
    <main>
      <section id="insert" class="py-sm-3 py-md-5">
        <div class="container">
          <div class="logo-flex">
            <img src="assets/images/logo.gif" class="logo" alt="" />
          </div>

          <form id="insert-form">
            <input type="hidden" name="id" id="id" value="" />

            <div class="mb-3">
              <label for="date" class="form-label">Select a Date:</label>
              <input
                type="date"
                id="date"
                class="form-control"
                name="date"
                value="<?php echo date('Y-m-d'); ?>"
                required
              />
            </div>

            <div class="mb-3">
              <label for="expense_name" class="form-label">Expense Name</label>
              <input
                type="text"
                class="form-control"
                name="expense_name"
                id="expense_name"
                placeholder="Ex: Gas"
                required
              />
            </div>

            <div class="mb-3">
              <label for="expenseCategory" class="form-label">Category:</label>
              <select
                class="form-control"
                id="category_name"
                name="category_name"
                required
              >
                <option value="">Select</option>
                <option value="Food">Food</option>
                <option value="Transportation">Transportation</option>
                <option value="Utilities">Utilities</option>
                <option value="Entertainment">Entertainment</option>
                <option value="Miscellaneous">Miscellaneous</option>
              </select>
            </div>

            <div class="mb-3">
              <label for="amount" class="form-label">Amount</label>
              <input
                type="float"
                class="form-control"
                name="amount"
                id="amount"
                placeholder="$"
                required
              />
            </div>

            <div class="mb-3">
              <label for="details" class="form-label">Details</label>
              <input
                type="text"
                class="form-control"
                name="details"
                id="details"
                placeholder="Optional"
              />
            </div>

            <button type="submit" class="btn btn-success" id="submit"></button>

            <!-- <button type="submit" class="btn btn-primary" id="update"></button>   -->

            <button type="submit" class="btn btn-danger" id="cancel"></button>
          </form>
        </div>
      </section>

      <section class="container" id="display">
        <div class="expense-list">
          <div class="table-responsive">
            <table
              id="table"
              class="table table-info table-striped table-md table-hover"
            >
              <thead>
                <tr class="table-dark">
                  <th>Date</th>
                  <th>Name</th>
                  <th>Amount</th>
                  <th>Details</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody class="tableBody" id="tableBody"></tbody>
            </table>
          </div>
          <div class="total-expense" id="total-expense">
            <h3 class="total" id="total">Total Expense</h3>
          </div>
        </div>
      </section>

      <!-- logout popup -->
      <!-- <div id="logout-popup" class="logout-popup">
          <div class="logout-popup-content">
            <p>Are you sure you want to logout?</p>
            <button id="confirm-logout">Yes</button>
            <button id="cancel-logout">No</button>
          </div>
        </div> -->

      <!-- delete popup -->
      <div id="delete-popup" class="delete-popup">
        <div class="delete-popup-content">
          <p>Are you sure you want to delete this expense?</p>
          <button id="confirm-delete">Yes</button>
          <button id="cancel-delete">No</button>
        </div>
      </div>

      <!-- edit popup -->
      <div id="edit-popup" class="edit-popup">
        <div class="edit-popup-content">
          <form id="edit-form">
            <input type="hidden" name="edit-id" id="edit-id" value="" />

            <div class="mb-3">
              <label for="date" class="form-label">Select a Date:</label>
              <input
                type="date"
                id="edit-date"
                class="form-control"
                name="edit-date"
                value="<?php echo date('Y-m-d'); ?>"
                required
              />
            </div>

            <div class="mb-3">
              <label for="expense_name" class="form-label">Expense Name</label>
              <input
                type="text"
                class="form-control"
                name="edit-expense-name"
                id="edit-expense-name"
                placeholder="Ex: Gas"
                required
              />
            </div>

            <div class="mb-3">
              <label for="expenseCategory">Category:</label>
              <select
                class="form-control"
                id="edit-category-name"
                name="edit-category-name"
              >
                <option value="">Select</option>
                <option value="Food">Food</option>
                <option value="Transportation">Transportation</option>
                <option value="Utilities">Utilities</option>
                <option value="Entertainment">Entertainment</option>
                <option value="Miscellaneous">Miscellaneous</option>
              </select>
            </div>

            <div class="mb-3">
              <label for="amount" class="form-label">Amount</label>
              <input
                type="float"
                class="form-control"
                name="edit-amount"
                id="edit-amount"
                placeholder="$"
                required
              />
            </div>

            <div class="mb-3">
              <label for="details" class="form-label">Details</label>
              <input
                type="text"
                class="form-control"
                name="edit-details"
                id="edit-details"
                placeholder="Optional"
              />
            </div>
            <button
              type="submit"
              class="btn btn-primary"
              id="update-edit"
            ></button>
            <button
              type="submit"
              class="btn btn-danger"
              id="edit-cancel"
            ></button>
          </form>
        </div>
      </div>
    </main>

    <footer class="container"></footer>

    <script src="js/main.js"></script>
    <script src="js/edit.js"></script>
    <script src="js/delete.js"></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
