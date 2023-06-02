<script
    src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
    crossorigin="anonymous"
></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"
></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script>
    $(function () {
        if (window.location.hash) {
            var hash = window.location.hash;
            $(hash).modal("toggle");
        }
        $(".datepicker").datepicker({
            autoclose: true,
            todayHighlight: true,
            useCurrent: false,
            format: "yyyy-mm-dd",
        });

        // Activate tooltip
        $('[data-bs-toggle="tooltip"]').tooltip();

        let ids = [];
        $("#deleteSelectedUser").addClass("disabled");
        var checkbox = $('table tbody input[type="checkbox"]');

        function toggleIdsArray(th) {
            let obj = ids.find((el) => el.id === th.attr("data-id"));
            if (obj) {
                removeIdsArray(th);
            } else {
                addIdsArray(th);
            }
        }

        function removeIdsArray(th) {
            ids = ids.filter(function (el) {
                return el.id != th.attr("data-id");
            });
        }

        function addIdsArray(th) {
            let obj = ids.find((el) => el.id === th.attr("data-id"));
            if (!obj) {
                ids.push({
                    id: th.attr("data-id"),
                    name: th.attr("data-name"),
                });
            }
        }

        function buildFormInputs() {
            $("#deleteUser").html("");
            $("#deleteUserList").html("");
            ids.map((obj) => {
                $("#deleteUser").append(
                    `<input type="hidden" name="ids[${obj.id}]" class="fields" value="${obj.id}">`
                );
                $("#deleteUserList").append(
                    `<li class="list-group-item border-0">
                            ${obj.name}
                    </li>`
                );
            });
        }

        function toggleDeleteButton() {
            if (ids.length > 0) {
                $("#deleteSelectedUser").removeClass("disabled");
                buildFormInputs();
            } else {
                $("#deleteSelectedUser").addClass("disabled");
            }
        }
        $("a.deleteSingleUser").click(function (e) {
            checkbox.each(function () {
                let th = $(this);
                removeIdsArray(th);
                this.checked = false;
            });
            addIdsArray($(e.target));
            buildFormInputs();
            $("#deleteUserModal").modal("toggle");
        });

        $("#selectAll").click(function () {
            if (this.checked) {
                checkbox.each(function () {
                    let th = $(this);
                    addIdsArray(th);
                    this.checked = true;
                });
            } else {
                checkbox.each(function () {
                    let th = $(this);
                    removeIdsArray(th);
                    this.checked = false;
                });
            }
            toggleDeleteButton();
            console.log(ids);
        });
        checkbox.click(function () {
            const th = $(this);
            if (!th.checked) {
                $("#selectAll").prop("checked", false);
                toggleIdsArray(th);
            }
            toggleDeleteButton();
        });
    });
</script>
