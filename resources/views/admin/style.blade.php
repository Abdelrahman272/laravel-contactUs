<style>
    /* Customize styles and colors */
    .custom-table {
        border-collapse: collapse;
        width: 100%;
    }

    .custom-table th,
    .custom-table td {
        border: 1px solid #e5e7eb;
        padding: 8px;
        text-align: left;
    }

    .custom-table th {
        background-color: #f3f4f6;
    }

    .custom-table tr:nth-child(even) {
        background-color: #f3f4f6;
    }

    .custom-button {
        background-color: #3490dc;
        color: #ffffff;
        border: none;
        padding: 5px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 12px;
        cursor: pointer;
    }

    .custom-button:hover {
        background-color: #2779bd;
    }

    /* Change the color of the delete button to red */
    .delete-button {
        background-color: #e3342f;
    }

    /* Modal styles */

    .modal {
        display: block;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .modal-content {
        background-color: white;
        width: 300px;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .modal-content h2 {
        font-size: 24px;
        margin-bottom: 15px;
    }

    .modal-content p {
        font-size: 16px;
        margin-bottom: 20px;
    }

    .modal-buttons {
        text-align: center;
    }

    .modal-button {
        margin: 5px;
        padding: 5px 10px;
        cursor: pointer;
        border: none;
        background-color: #e74c3c;
        color: white;
        border-radius: 5px;
    }

    .modal-button.cancel {
        background-color: #3498db;
    }


</style>
