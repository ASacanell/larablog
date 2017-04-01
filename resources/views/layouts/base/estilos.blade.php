<!-- Styles -->
<style>
    html, body {
        background-color: #fff;
        color: #101010;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
        overflow:hidden;
        text-decoration: none;
    }

    ::-moz-selection { background-color : #D3AC2B}
    ::selection { background-color : #D3AC2B; }

    .noselect {
        -webkit-touch-callout: none; /* iOS Safari */
        -webkit-user-select: none; /* Safari */
        -khtml-user-select: none; /* Konqueror HTML */
        -moz-user-select: none; /* Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
        user-select: none; /* Non-prefixed version, currently
                                  supported by Chrome and Opera */
    }

    .full-height {
        height: 100vh;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
        z-index: 10;
    }

    .links > a {
        color: #333D51;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .flex-blog {
        display: flex;
        align-items: stretch;
        justify-content: space-between;
    }

    .flex-sidebar {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .sidebar {
        padding-top: 100px;
        width: 300px;
        height: 100vh;
        background-color: #333D51 ;
        text-align: center;
        font-family: Ailerons, sans-serif;
    }

    .img-circle {
        border-radius: 50%;
        width: 200px;
        margin-bottom: 20px;
    }

    .blog-title {
        font-size: 40px;
        font-weight: bold;
        color: #F4F3EA;
    }

    .blog-title:hover {
        color: #D3AC2B;
        text-decoration: none;
    }

    .sidebar-social {
        margin-top: 30vh;
        color: #D3AC2B;
        opacity: 0.5;
        cursor: pointer;
    }
    .sidebar-social:hover {
        opacity: 1;
        position: relative;
        top: -5px;
    }

    .content {
        height: 94vh;
        margin-top: 6vh;
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .posts {
        height: 88vh;
        flex: 1;
        padding: 0 10% 0 10%;
        font-size: 18px;
        text-align: justify;
        font-family: Kayak, sans-serif;
        overflow:auto;
    }

    .post {
        margin-bottom: 2vh;
    }

    .post-title {
        font-size: 36px;
        color: #D3AC2B;
        font-family: Kayak, sans-serif;
    }
    .post-title:hover {
        text-decoration: none;
    }
    .post-title::-moz-selection { background-color : #333D51}
    .post-title::selection { background-color : #333D51; }

    .post-pagination {
        text-align: center;
        height: 6vh;
    }
</style>