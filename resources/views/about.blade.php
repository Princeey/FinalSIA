@extends('layout')

@section('content')

<style>
    
    .card {
        border: none;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: #5c5e60;
        color: #fff;
        font-weight: bold;
    }

    .card-body {
        line-height: 1.6;
    }

    .lead {
        font-size: 1.1rem;
        color: #333;
    }

    ul {
        padding-left: 20px;
    }

    li {
        margin-bottom: 10px;
    }
</style>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Smartphone Guide</div>

                <div class="card-body">
                    <p class="lead">
                        Smartphones have become an integral part of modern life, offering a range of features and functionalities that cater to different needs and preferences. Whether you're looking for a device for communication, entertainment, productivity, or photography, there's a smartphone out there for you.
                    </p>

                    <p>
                        Here's an overview of key aspects to consider when choosing a smartphone:
                    </p>

                    <ul>
                        <li><strong>Operating System:</strong> The two main operating systems are Android and iOS. Android offers more customization options and a wider range of devices, while iOS is known for its seamless integration with other Apple products and a more controlled ecosystem.</li>

                        <li><strong>Camera Quality:</strong> For many users, the camera is one of the most important features. Consider the number of megapixels, aperture size, and additional features like night mode, portrait mode, and optical zoom.</li>

                        <li><strong>Battery Life:</strong> A good battery life ensures that your phone lasts throughout the day. Look for smartphones with larger battery capacities and energy-efficient processors.</li>

                        <li><strong>Display:</strong> The display quality affects everything from reading text to watching videos. Look for high-resolution displays, AMOLED or OLED screens for better color accuracy, and higher refresh rates for smoother scrolling and gaming.</li>

                        <li><strong>Performance:</strong> A powerful processor and sufficient RAM are crucial for smooth multitasking and running demanding apps. Flagship devices usually offer the best performance, but there are also mid-range phones that provide excellent value.</li>

                        <li><strong>Storage:</strong> Depending on your usage, you might need more or less storage. Some smartphones offer expandable storage via microSD cards, while others do not.</li>

                        <li><strong>Design and Build:</strong> The design and build quality can affect your user experience. Consider the materials used (e.g., glass, metal, plastic) and whether the phone is water or dust resistant.</li>

                        <li><strong>Price:</strong> Smartphones come in a wide range of prices. Set a budget and find the best device that meets your needs within that range. Remember that more expensive doesn't always mean better for your specific requirements.</li>
                    </ul>

                    <p>
                        Ultimately, the best smartphone for you depends on your personal preferences and needs. Consider the features that matter most to you and choose a device that offers the best combination of performance, functionality, and value.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
