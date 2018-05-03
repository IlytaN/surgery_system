<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container"
     style="background-image:url(<?= base_url('assets/imgs/login_photo.jpg') ?>);
             width: 100%;
             height: -webkit-fill-available;
             background-size:     cover;
             background-repeat:   no-repeat;
             background-position: center center">

    <div class="row" style="margin-top: 10%">
        <div class="col-md-6 col-md-offset-3" style="background-color: #ddddddcf; padding: 40px;">
            <!--This is initialised  the form  where action:login is the function name in the controller-->
            <?= form_open('login'); ?>
            <div class="text-center">
                <h3><b>Select User Type</b></h3>
            </div>
            <br>
            <div class="form-group text-center">
                <div class="user-types row text-center">
                    <div class="col-md-6">

                        <!--                        <i class="fas fa-user-md fa-8x" style="display: block"></i>-->
                        <img style="margin-bottom: 8px " height="135px"
                             src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMS4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQyMC43MDQgNDIwLjcwNCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDIwLjcwNCA0MjAuNzA0OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjUxMnB4IiBoZWlnaHQ9IjUxMnB4Ij4KPGc+Cgk8Zz4KCQk8Zz4KCQkJPHBhdGggc3R5bGU9ImZpbGw6IzgwMzYyRDsiIGQ9Ik0yNjkuNTc1LDEyLjcyNGwtNDYuMDYyLDI1MC4wNTJsMzIuOTAyLDYuNThDMzI2LjA1NiwyMTguMzU5LDM1NS45NDEsMTIuNzI0LDI2OS41NzUsMTIuNzI0eiIvPgoJCTwvZz4KCQk8Zz4KCQkJPHBhdGggc3R5bGU9ImZpbGw6IzgwMzYyRDsiIGQ9Ik0yNjkuNTc1LDEyLjcyNGMtMTEuNTE2LTYuOTkyLTcyLjI5My0yNC43NDktMTE4LjQ0NiwwICAgICBDOTQuMzc0LDQzLjE1OCw0NC43NDcsMTUyLjAwNywxMjQuODA4LDI2Mi43NzZjMC4xMTQsMC4xNTcsNTkuMjIzLTYuNTgsNTkuMjIzLTYuNThMMjY5LjU3NSwxMi43MjR6Ii8+CgkJPC9nPgoJCTxnPgoJCQk8cGF0aCBzdHlsZT0iZmlsbDojRkZEN0EzOyIgZD0iTTI1Ni43NzIsMjMyLjA4NGgtMC4zNTh2LTE1LjM3SDE2NC4yOXYxNS4zNTRjMCwxNS4wNDItMC4wNjMsMzEuMzkyLTEzLjE2MSw0MS4yODJ2MTQ3LjM1NCAgICAgaDU5LjIyM2MwLDAsMzEuMDExLDAsNTkuMjIzLDBWMjczLjEyQzI1Ni44MTIsMjYzLjIwNSwyNTYuNzcyLDI0Ni45OTcsMjU2Ljc3MiwyMzIuMDg0eiIvPgoJCTwvZz4KCQk8Zz4KCQkJPHBhdGggc3R5bGU9ImZpbGw6IzU0NTQ2NTsiIGQ9Ik0yMTAuMzUyLDM1NC45Yy0xNC4xNSwwLTI3LjUwMi0xLjg3Ni0zOS40ODItNS4xMzR2NzAuOTM3aDkyLjEyNHYtNzUuMjc5ICAgICBDMjQ4LjA2NiwzNTEuMzgxLDIyOS45NDEsMzU0LjksMjEwLjM1MiwzNTQuOXoiLz4KCQk8L2c+CgkJPGc+CgkJCTxwYXRoIHN0eWxlPSJmaWxsOiNGREM4OEU7IiBkPSJNMjYyLjk5NCwzMDIuMjU4YzIuNDAxLDAuNjU1LDQuNTYzLDEuMDA0LDYuNTgsMS4xNzRWMjczLjEyICAgICBjLTEyLjc2Mi05LjkxNS0xMi44MDMtMjYuMTI0LTEyLjgwMy00MS4wMzdsLTAuMDA5LTAuMzgydi0xNS4zN2wtNzIuNzMyLDAuMzgybC0xOS43NDEsNi41OCAgICAgQzE3Ny40NSwyMzguMSwyMTcuNzU1LDI4OS45MiwyNjIuOTk0LDMwMi4yNTh6Ii8+CgkJPC9nPgoJCTxnPgoJCQk8cGF0aCBzdHlsZT0iZmlsbDojRkZFMUIyOyIgZD0iTTMwMi40NzYsMTMxLjE2OWMwLDUyLjY5Ni01Mi40MDgsMTE4LjQ0Ni05Mi4xMjQsMTE4LjQ0NnMtOTIuMTI0LTY1Ljc1LTkyLjEyNC0xMTguNDQ2ICAgICBzNDEuMjQ2LTcyLjM4NCw5Mi4xMjQtNzIuMzg0UzMwMi40NzYsNzguNDczLDMwMi40NzYsMTMxLjE2OXoiLz4KCQk8L2c+CgkJPGc+CgkJCTxwYXRoIHN0eWxlPSJmaWxsOiM4MDM2MkQ7IiBkPSJNMjIzLjUxMiwyNS44ODRjLTMuNjk3LDAtMTUuNzAxLDQuMTU0LTI1LjUxMiw3Ljc5NGwtMC44MDktMS4yMTRjMCwwLTEuMzU0LDEuMDY0LTMuNjk4LDIuOTA4ICAgICBjLTUuNDU3LDIuMDcyLTkuNDYyLDMuNjcyLTkuNDYyLDMuNjcybDEuNTM5LDIuNTY2Yy0yNC45NzYsMTkuNjc4LTgxLjk2LDY0LjY5My04Ny4wODQsNjkuODE4ICAgICBjLTYuNTgsNi41OCwzOS40ODIsMTc0LjQ2NCwzOS40ODIsNzguOTY0YzAtNzkuNzg2LDQ0LjMyNy05NS41ODcsODUuNTQ0LTEwNS4yODVjMTguNjQ0LTQuMzg3LDI0LjEyOC0xNS4zNTQsMjYuMzIxLTI2LjMyMSAgICAgQzI1Mi4wMjcsNDcuODE5LDIzMC4wOTMsMjUuODg0LDIyMy41MTIsMjUuODg0eiIvPgoJCTwvZz4KCQk8Zz4KCQkJPHBhdGggc3R5bGU9ImZpbGw6IzgwMzYyRDsiIGQ9Ik0yNDMuMjUzLDY1LjM2NmMxMi4wNjQsNDMuMzIsMzYuMTkyLDYyLjkyNCw1OC44MTIsNjguNjgyYzEyLjM5NSwzLjE1NSw2Ljk5Mi0zNS43OCw2Ljk5Mi0zNS43OCAgICAgcy0xNy41NDgtNDQuOTY2LTE5Ljc0MS00Ni4wNjJjLTIuMTkzLTEuMDk3LTE5Ljc0MS0zOS40ODItMTkuNzQxLTM5LjQ4MmwtMzkuNDgyLDMyLjkwMkwyNDMuMjUzLDY1LjM2NnoiLz4KCQk8L2c+CgkJPGc+CgkJCTxwYXRoIHN0eWxlPSJmaWxsOiNFNEVCRjA7IiBkPSJNMTU4LjM1NSwyNjUuNDY1Yy02LjE2MywxMC4wMTMtMTguNzI4LDE3LjA1Mi00NC41MTQsMTcuMDUyaC0yLjE5MyAgICAgYy0zOS45NzYsMC03Mi4zODQsMzIuNDA3LTcyLjM4NCw3Mi4zODR2NDYuMDYyYzAsMTAuOTAyLDguODM4LDE5Ljc0MSwxOS43NDEsMTkuNzQxaDEzNS4wMjhMMTU4LjM1NSwyNjUuNDY1eiIvPgoJCTwvZz4KCQk8Zz4KCQkJPHBhdGggc3R5bGU9ImZpbGw6I0U0RUJGMDsiIGQ9Ik0yNjIuMzQ5LDI2NS40NjVjNi4xNjMsMTAuMDEzLDE4LjcyOCwxNy4wNTIsNDQuNTE0LDE3LjA1MmgyLjE5MyAgICAgYzM5Ljk3NiwwLDcyLjM4NCwzMi40MDcsNzIuMzg0LDcyLjM4NHY0Ni4wNjJjMCwxMC45MDItOC44MzgsMTkuNzQxLTE5Ljc0MSwxOS43NDFIMjI2LjY3MUwyNjIuMzQ5LDI2NS40NjV6Ii8+CgkJPC9nPgoJCTxnPgoJCQk8Y2lyY2xlIHN0eWxlPSJmaWxsOiNEMEQ3REM7IiBjeD0iMTExLjY0NyIgY3k9IjM4Ny44MDIiIHI9IjE5Ljc0MSIvPgoJCTwvZz4KCQk8Zz4KCQkJPHBhdGggc3R5bGU9ImZpbGw6I0QwRDdEQzsiIGQ9Ik0zMzMuNzgzLDQxMC4zMzhsLTguMTM1LTUuNTkxYzcuMjI5LTEwLjUxOCwxMS4zNzYtMjYuMjg4LDExLjM3Ni00My4yNjcgICAgIGMwLTI5LjQyNy0xMi44MDctNTQuMjg4LTI3Ljk2Ni01NC4yODhzLTI3Ljk2NiwyNC44NjEtMjcuOTY2LDU0LjI4OGMwLDE2Ljk3OSw0LjE0NiwzMi43NDksMTEuMzc2LDQzLjI2N2wtOC4xMzUsNS41OTEgICAgIGMtOC4zMzEtMTIuMTIzLTEzLjExMS0yOS45MzEtMTMuMTExLTQ4Ljg1OGMwLTM1Ljk3NywxNi42MTktNjQuMTU4LDM3LjgzNy02NC4xNThjMjEuMjE3LDAsMzcuODM3LDI4LjE4MiwzNy44MzcsNjQuMTU4ICAgICBDMzQ2Ljg5MywzODAuNDA3LDM0Mi4xMTQsMzk4LjIxNSwzMzMuNzgzLDQxMC4zMzh6Ii8+CgkJPC9nPgoJCTxnPgoJCQk8Y2lyY2xlIHN0eWxlPSJmaWxsOiM1NDU0NjU7IiBjeD0iMjg5LjMxNiIgY3k9IjQwNy41NDMiIHI9IjYuNTgiLz4KCQk8L2c+CgkJPGc+CgkJCTxjaXJjbGUgc3R5bGU9ImZpbGw6IzU0NTQ2NTsiIGN4PSIzMjguNzk4IiBjeT0iNDA3LjU0MyIgcj0iNi41OCIvPgoJCTwvZz4KCQk8Zz4KCQkJPHBhdGggc3R5bGU9ImZpbGw6I0QwRDdEQzsiIGQ9Ik0xMTEuNjQ3LDM3OS41NzdjLTIuNzI2LDAtNC45MzUtMi4yMDktNC45MzUtNC45MzVjMC04NS4yNzQsNDAuMzA0LTEwOC42NDYsNDIuMDItMTA5LjU5OSAgICAgYzIuMzg3LTEuMzI5LDUuMzg4LTAuNDY2LDYuNzEsMS45MTdjMS4zMjEsMi4zNzQsMC40NzIsNS4zNjctMS44OTIsNi42OThjLTAuNDg0LDAuMjgtMzYuOTY4LDIyLjE3Mi0zNi45NjgsMTAwLjk4NCAgICAgQzExNi41ODIsMzc3LjM2OCwxMTQuMzczLDM3OS41NzcsMTExLjY0NywzNzkuNTc3eiIvPgoJCTwvZz4KCQk8Zz4KCQkJPGNpcmNsZSBzdHlsZT0iZmlsbDojQjJCOUJGOyIgY3g9IjExMS42NDciIGN5PSIzODcuODAyIiByPSIxMC40MTkiLz4KCQk8L2c+CgkJPGc+CgkJCTxwYXRoIHN0eWxlPSJmaWxsOiNEMEQ3REM7IiBkPSJNMzA5LjA1NywzMDcuMTk1Yy0yLjAzNCwwLTMuOTM4LTEuMjY4LTQuNjU0LTMuMjk1Yy00LjI4OC0xMi4xNS0xMS4yNjgtMTcuMjkxLTExLjMzNy0xNy4zMzkgICAgIGMtMi4yMzMtMS41NjMtMi43NzYtNC42NDEtMS4yMTMtNi44NzRjMS41NjMtMi4yMyw0LjYzNi0yLjc3NCw2Ljg3NC0xLjIxM2MwLjM4OSwwLjI3Myw5LjU4NSw2Ljg0MiwxNC45ODQsMjIuMTQzICAgICBjMC45MDgsMi41NjktMC40NDIsNS4zODgtMy4wMTIsNi4yOTZDMzEwLjE1NSwzMDcuMTAzLDMwOS42MDEsMzA3LjE5NSwzMDkuMDU3LDMwNy4xOTV6Ii8+CgkJPC9nPgoJPC9nPgoJPGc+CgkJPHBhdGggc3R5bGU9ImZpbGw6I0ZGRTFCMjsiIGQ9Ik0yOTIuNjc2LDEzMS43NzFjMTAuNzY3LTIuNDY4LDE3LjgyMSwyLjgwNSwxNy44MjEsMTMuMTYxYzAsMTMuNzA5LTE0LjQ3OSw0Ny4yOTYtMjkuNzAxLDI2LjMyMSAgICBTMjkyLjY3NiwxMzEuNzcxLDI5Mi42NzYsMTMxLjc3MXoiLz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K"/>
                        <br>
                        <label class="btn btn-primary">
                            <input type="radio" name="userType" id="doctor" value="doctor"> Doctor
                        </label>
                    </div>

                    <div class="col-md-6">
                        <!--                        <i class="fas fa-user-circle fa-8x block" style="display: block"></i>-->
                        <img style="margin-bottom: 8px " height="135px"
                             src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIuMDAxIDUxMi4wMDEiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMi4wMDEgNTEyLjAwMTsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI1MTJweCIgaGVpZ2h0PSI1MTJweCI+CjxwYXRoIHN0eWxlPSJmaWxsOiM0NjVBNjU7IiBkPSJNNDcyLjg2MywyODUuMTU2SDM5LjEzN2MtNC4xMywwLTcuNDc5LDMuMzYxLTcuNDc5LDcuNTA3djIxMS41NjljMCw0LjE0NiwzLjM0OCw3LjUwNyw3LjQ3OSw3LjUwNyAgaDQzMy43MjdjNC4xMzEsMCw3LjQ3OS0zLjM2MSw3LjQ3OS03LjUwN1YyOTIuNjY0QzQ4MC4zNDIsMjg4LjUxOCw0NzYuOTk0LDI4NS4xNTYsNDcyLjg2MywyODUuMTU2eiIvPgo8cGF0aCBzdHlsZT0iZmlsbDojMkUzQzQyOyIgZD0iTTQ3Mi44NjMsMjg1LjE1NkgzOS4xMzdjLTQuMTMsMC03LjQ3OSwzLjM2MS03LjQ3OSw3LjUwN3YyNS4wMjRoNDQ4LjY4NXYtMjUuMDI0ICBDNDgwLjM0MiwyODguNTE4LDQ3Ni45OTQsMjg1LjE1Niw0NzIuODYzLDI4NS4xNTZ6Ii8+CjxwYXRoIHN0eWxlPSJmaWxsOiM2OEI5RDg7IiBkPSJNMTQ3LjY1OCwxMjIuMDE2Yy0wLjA2OC0wLjAwMS0wLjEzNi0wLjAwMS0wLjIwNCwwYy01Mi4xMjQsMC43MTYtOTYuMTU4LDQzLjYxMy05Ni4xNTgsOTMuNjczICB2MjguNjEyYzAsNC4xNDYsMy4zNDgsNy41MDcsNy40NzksNy41MDdoMTc3LjU2MmM0LjEzLDAsNy40NzktMy4zNjEsNy40NzktNy41MDd2LTI4LjYxMiAgQzI0My44MTYsMTY1LjYyOSwxOTkuNzgxLDEyMi43MzIsMTQ3LjY1OCwxMjIuMDE2eiIvPgo8cGF0aCBzdHlsZT0iZmlsbDojMzY5NUIyOyIgZD0iTTE0Ny42NTgsMTIyLjAxNmMtMC4wNjgtMC4wMDEtMC4xMzYtMC4wMDEtMC4yMDQsMGMtNC40NjMsMC4wNjEtOC44NjUsMC40MzktMTMuMTg2LDEuMDk3ICBjNDYuMTUzLDcuMDI1LDgyLjk3Miw0Ni44MDIsODIuOTcyLDkyLjU3N3YyOC42MTJjMCw0LjE0Ni0zLjM0OCw3LjUwNy03LjQ3OSw3LjUwN2gyNi41NzdjNC4xMywwLDcuNDc5LTMuMzYxLDcuNDc5LTcuNTA3VjIxNS42OSAgQzI0My44MTYsMTY1LjYyOSwxOTkuNzgxLDEyMi43MzIsMTQ3LjY1OCwxMjIuMDE2eiIvPgo8cGF0aCBzdHlsZT0iZmlsbDojRDMzMzNDOyIgZD0iTTEyOC45NTMsMTU0Ljc0N2gzNy4yMDVsOS42MzUtMTguNzljMS42NzgtMy4yNzksMi44Ni01LjkzMiwzLjY1OC04LjA5NyAgYy0xMC4wMDMtMy42MjgtMjAuNzE0LTUuNjkyLTMxLjc5My01Ljg0NGMtMC4wNjgtMC4wMDEtMC4xMzYtMC4wMDEtMC4yMDQsMGMtMTAuOTc5LDAuMTUxLTIxLjU5NiwyLjE3OS0zMS41MjEsNS43NDYgIGMwLjg2OCwyLjI5OSwxLjk3NCw0Ljk5MywzLjM4NCw4LjE5NUwxMjguOTUzLDE1NC43NDd6Ii8+CjxwYXRoIHN0eWxlPSJmaWxsOiNBRjI3M0I7IiBkPSJNMTc5LjQ1MSwxMjcuODZjLTYuNTYtMi4zNzktMTMuNDMtNC4wNy0yMC41MDQtNS4wMDZsLTE2LjE1OSwzMS44OTNoNC43NjdoMTguNjAzbDkuNjM1LTE4Ljc5ICBDMTc3LjQ3MSwxMzIuNjc3LDE3OC42NTMsMTMwLjAyNSwxNzkuNDUxLDEyNy44NnoiLz4KPHBhdGggc3R5bGU9ImZpbGw6I0YyNDY0RjsiIGQ9Ik0xNjYuMjU2LDE1NC43NDdoLTM3LjQwMWwtMTEuNTAyLDUwLjEyMWMtMC42MjQsMi43MTksMC4yNTgsNS41NjMsMi4zMDgsNy40NDZsMjIuNjg5LDIwLjg0NCAgYzEuNDczLDEuMzUzLDMuMzM5LDIuMDMsNS4yMDYsMi4wM3MzLjczMy0wLjY3Nyw1LjIwNi0yLjAzbDIyLjY4OS0yMC44NDRjMi4wNS0xLjg4NCwyLjkzMi00LjcyOSwyLjMwOC03LjQ0NkwxNjYuMjU2LDE1NC43NDd6Ii8+CjxwYXRoIHN0eWxlPSJmaWxsOiNEMzMzM0M7IiBkPSJNMTMzLjgyNiwyMjUuMzI4bDguNTI0LDcuODMyYzEuNDczLDEuMzUzLDMuMzM5LDIuMDMsNS4yMDYsMi4wM3MzLjczMy0wLjY3Nyw1LjIwNi0yLjAzICBsMjIuNjg5LTIwLjg0NGMyLjA1LTEuODg0LDIuOTMyLTQuNzI5LDIuMzA4LTcuNDQ2bC0xMS41MDItNTAuMTIxaC0xOC43aC00Ljc2N2wxMS44MTcsNTEuNDkxTDEzMy44MjYsMjI1LjMyOHoiLz4KPHBhdGggc3R5bGU9ImZpbGw6IzIzMjMyMzsiIGQ9Ik0zOTUuNDk2LDIwMy4xMWgtNTMuMTA0Yy00LjEzLDAtNy40NzksMy4zNjEtNy40NzksNy41MDd2MzMuNjg0YzAsNC4xNDYsMy4zNDgsNy41MDcsNy40NzksNy41MDcgIGg1My4xMDRjNC4xMywwLDcuNDc5LTMuMzYxLDcuNDc5LTcuNTA3di0zMy42ODRDNDAyLjk3NSwyMDYuNDcxLDM5OS42MjcsMjAzLjExLDM5NS40OTYsMjAzLjExeiIvPgo8cGF0aCBzdHlsZT0iZmlsbDojMzUzNTM1OyIgZD0iTTQ2NC41OCw3NS41NzhIMjczLjMwOWMtNC4xMywwLTcuNDc5LDMuMzYxLTcuNDc5LDcuNTA3djEyNy41MzJjMCw0LjE0NiwzLjM0OCw3LjUwNyw3LjQ3OSw3LjUwNyAgaDE5MS4yN2M0LjEzLDAsNy40NzktMy4zNjEsNy40NzktNy41MDdWODMuMDg1QzQ3Mi4wNTgsNzguOTM5LDQ2OC43MSw3NS41NzgsNDY0LjU4LDc1LjU3OHoiLz4KPHBhdGggc3R5bGU9ImZpbGw6IzIzMjMyMzsiIGQ9Ik00NjQuNTgsNzUuNTc4aC0xOS45NDR2MTQyLjU0NmgxOS45NDRjNC4xMywwLDcuNDc5LTMuMzYxLDcuNDc5LTcuNTA3VjgzLjA4NSAgQzQ3Mi4wNTgsNzguOTM5LDQ2OC43MSw3NS41NzgsNDY0LjU4LDc1LjU3OHoiLz4KPHBhdGggc3R5bGU9ImZpbGw6IzU0NkY3QTsiIGQ9Ik01MDQuNTIyLDIzNi43OTNINy40NzljLTQuMTMxLDAtNy40NzksMy4zNjEtNy40NzksNy41MDd2NDguMzYzYzAsNC4xNDYsMy4zNDgsNy41MDcsNy40NzksNy41MDcgIGg0OTcuMDQyYzQuMTMsMCw3LjQ3OS0zLjM2MSw3LjQ3OS03LjUwN3YtNDguMzYzQzUxMiwyNDAuMTU1LDUwOC42NTIsMjM2Ljc5Myw1MDQuNTIyLDIzNi43OTN6Ii8+CjxwYXRoIHN0eWxlPSJmaWxsOiNGRkM4OUY7IiBkPSJNMTQ3LjU1NSwwLjI2MWMtMjcuNTIsMC00OS45MDgsMjIuNDczLTQ5LjkwOCw1MC4wOTd2MzYuNjQ5YzAsMjcuNjI0LDIyLjM4OSw1MC4wOTcsNDkuOTA4LDUwLjA5NyAgczQ5LjkwOC0yMi40NzMsNDkuOTA4LTUwLjA5N1Y1MC4zNTdDMTk3LjQ2NCwyMi43MzQsMTc1LjA3NSwwLjI2MSwxNDcuNTU1LDAuMjYxeiIvPgo8cGF0aCBzdHlsZT0iZmlsbDojRjdCMDgxOyIgZD0iTTE0Ny41NTUsMC4yNjFjLTQuODQyLDAtOS41MTksMC43MS0xMy45NSwyLjAwNmMyMC43NDksNi4wNzUsMzUuOTU4LDI1LjMyNywzNS45NTgsNDguMDkxdjM2LjY0OSAgYzAsMjIuNzYzLTE1LjIwOSw0Mi4wMTYtMzUuOTU4LDQ4LjA5MWM0LjQzLDEuMjk3LDkuMTA4LDIuMDA2LDEzLjk1LDIuMDA2YzI3LjUyLDAsNDkuOTA4LTIyLjQ3Myw0OS45MDgtNTAuMDk3VjUwLjM1NyAgQzE5Ny40NjQsMjIuNzM0LDE3NS4wNzUsMC4yNjEsMTQ3LjU1NSwwLjI2MXoiLz4KPHBhdGggZD0iTTE5Ny40NjQsNjguNjc5VjUwLjM1N2MwLTI3LjYyNC0yMi4zODktNTAuMDk3LTQ5LjkwOC01MC4wOTdTOTcuNjQ3LDIyLjczNCw5Ny42NDcsNTAuMzU3djE4LjMyNWg3LjQ3OSAgYzM3LjA4NSwwLDUwLjU5NS0yNS4xMzUsNTAuNTk1LTI1LjEzNXM5LjQ0MywyNS4wMTMsMzQuMjYzLDI1LjEzTDE5Ny40NjQsNjguNjc5eiIvPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K"/>
                        <br>
                        <label class="btn btn-primary">
                            <input type="radio" name="userType" id="admin" value="admin"> Secretary
                        </label>
                    </div>

                </div>
            </div>
            <hr>
            <div class="col-md-6 col-md-offset-3" style="width: 50%">
                <div class="form-group text-center">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Your username">
                </div>
                <div class="form-group text-center">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password"
                           placeholder="Your password">
                </div>
            </div>
            <div class="form-group text-center">
                <input type="submit" class="btn btn-primary" style="width: 30%" value="Login">
            </div>

            </form>

            <?php if (validation_errors()) : ?>
                <div class="col-md-12">
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors() ?>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (isset($error)) : ?>
                <div class="col-md-12">
                    <div class="alert alert-danger" role="alert">
                        <?= $error ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div><!-- .row -->
</div><!-- .container -->
