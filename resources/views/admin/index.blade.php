<!DOCTYPE html>
<html lang="en">

<body>
    <div class="container">
    @include('admin.layouts.sidebar')
        <main>
            <header>
                <button class="menu-btn" id="menu-open">
                    <i class='bx bx-menu'></i>
                </button>
            </header>

            <div class="separator">
                <div class="info">
                    <h3>My Courses</h3>
                    <a href="#">View All</a>
                </div>
                <div class="search">
                    <i class='bx bx-search'></i>
                    <input type="text" placeholder="Search...">
                </div>
            </div>

            <div class="analytics">
                <div class="item">
                    <div class="progress">
                        <div class="info">
                            <h5>Locationsss</h5>
                            <p>35 Lessons</p>
                        </div>
                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <i class='bx bx-map-pin'></i>
                </div>
                <div class="item">
                    <div class="progress">
                        <div class="info">
                            <h5>People</h5>
                            <p>30 Lessons</p>
                        </div>
                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <i class='bx bx-user-voice'></i>
                </div>
                <div class="item">
                    <div class="progress">
                        <div class="info">
                            <h5>Airport</h5>
                            <p>45 Lessons</p>
                        </div>
                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <i class='bx bxs-plane-land'></i>
                </div>
                <div class="item">
                    <div class="progress">
                        <div class="info">
                            <h5>Places</h5>
                            <p>20 Lessons</p>
                        </div>
                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <i class='bx bxs-castle'></i>
                </div>
            </div>

            <div class="separator">
                <div class="info">
                    <h3>Planning</h3>
                    <a href="#">View All</a>
                </div>
                <input type="date" value="2023-10-15">
            </div>

            <div class="planning">
                <div class="item">
                    <div class="left">
                        <div class="icon">
                            <i class='bx bx-book-alt'></i>
                        </div>
                        <div class="details">
                            <h5>Reading - Topic 1</h5>
                            <p>8:00 - 10:00</p>
                        </div>
                    </div>
                    <i class='bx bx-dots-vertical-rounded'></i>
                </div>
                <div class="item">
                    <div class="left">
                        <div class="icon">
                            <i class='bx bx-edit-alt'></i>
                        </div>
                        <div class="details">
                            <h5>Writing - Topic 2</h5>
                            <p>13:00 - 14:00</p>
                        </div>
                    </div>
                    <i class='bx bx-dots-vertical-rounded'></i>
                </div>
                <div class="item">
                    <div class="left">
                        <div class="icon">
                            <i class='bx bx-headphone'></i>
                        </div>
                        <div class="details">
                            <h5>Listening - Topic 1</h5>
                            <p>15:00 - 16:00</p>
                        </div>
                    </div>
                    <i class='bx bx-dots-vertical-rounded'></i>
                </div>
                <div class="item">
                    <div class="left">
                        <div class="icon">
                            <i class='bx bx-volume-low'></i>
                        </div>
                        <div class="details">
                            <h5>Listening - Topic 2</h5>
                            <p>19:00 - 20:00</p>
                        </div>
                    </div>
                    <i class='bx bx-dots-vertical-rounded'></i>
                </div>
            </div>
        </main>

        <aside class="right-section">

            <div class="separator" id="first">
                <h4>Statistics</h4>
            </div>

            <div class="stats">
                <div class="item">
                    <div class="top">
                        <p>Courses</p>
                        <p>Completed</p>
                    </div>
                    <div class="bottom">
                        <div class="line"></div>
                        <h3>02</h3>
                    </div>
                </div>
                <div class="item">
                    <div class="top">
                        <p>Total Points</p>
                        <p>Gained</p>
                    </div>
                    <div class="bottom">
                        <div class="line"></div>
                        <h3>250</h3>
                    </div>
                </div>
                <div class="item">
                    <div class="top">
                        <p>Courses</p>
                        <p>In Progress</p>
                    </div>
                    <div class="bottom">
                        <div class="line"></div>
                        <h3>03</h3>
                    </div>
                </div>
                <div class="item">
                    <div class="top">
                        <p>Tasks</p>
                        <p>Finished</p>
                    </div>
                    <div class="bottom">
                        <div class="line"></div>
                        <h3>250</h3>
                    </div>
                </div>
            </div>

            <div class="separator">
                <h4>Weekly Work</h4>
            </div>

            <div class="weekly">
                <div class="title">
                    <div class="line"></div>
                    <h5>Tasks This Week</h5>
                </div>
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                </div>
            </div>
        </aside>
    </div>
</body>

</html>