<button
    style="background-color: black;
    color: {{ $color }}
    font-size: 1.5rem;
    font-weight: bold;
    cursor: pointer;
    border: none;
    border-radius: 5px;
    background: {{ $background }};
    box-shadow: 0px 4px 4px #712E03, 
              0px 4px 4px rgba(0, 0, 0, 0.25);
    padding: 10px 100px;
    transition: background 0.3s ease;"
    id='btnBakery'">
    {{ $slot }}
</button>


