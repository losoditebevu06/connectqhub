<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConnectQ Hub - Men's Clothing & Fashion Store</title>
    <meta name="description" content="ConnectQ Hub offers quality men's clothing including shirts, pants, jackets, and accessories. Discover our collection of comfortable and stylish apparel for modern men. Click here to continue exploring our extensive range of casual and formal wear.">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .header-nav-qx7m {
            background: #2c3e50;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .nav-container-8k2p {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo-brand-5n9r {
            color: #fff;
            font-size: 1.8rem;
            font-weight: bold;
            text-decoration: none;
        }

        .nav-menu-3t6w {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-menu-3t6w a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s;
        }

        .nav-menu-3t6w a:hover {
            color: #3498db;
        }

        .hero-section-9m4l {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 120px 0 80px;
            text-align: center;
        }

        .hero-content-2x8v {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .hero-title-7j3q {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .hero-subtitle-4w9k {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }

        .cta-button-6r5h {
            background: #e74c3c;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: background 0.3s;
        }

        .cta-button-6r5h:hover {
            background: #c0392b;
        }

        .about-section-1z8m {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .container-main-5q2n {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .section-title-3p7k {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #2c3e50;
        }

        .about-grid-8w4r {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
            margin-bottom: 4rem;
        }

        .about-card-9n6t {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .card-title-4m8x {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #34495e;
        }

        .collections-area-7l3w {
            padding: 80px 0;
            background: white;
        }

        .collections-grid-2k9p {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .collection-item-5x7n {
            text-align: center;
            padding: 2rem;
            border: 2px solid #ecf0f1;
            border-radius: 8px;
            transition: transform 0.3s;
        }

        .collection-item-5x7n:hover {
            transform: translateY(-5px);
            border-color: #3498db;
        }

        .collection-image-8q4m {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 5px;
            margin-bottom: 1rem;
        }

        .history-timeline-6w9r {
            padding: 80px 0;
            background: #34495e;
            color: white;
        }

        .timeline-container-3n8k {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .timeline-item-7m2q {
            margin-bottom: 3rem;
            padding: 2rem;
            background: rgba(255,255,255,0.1);
            border-radius: 8px;
            border-left: 4px solid #3498db;
        }

        .timeline-year-9p5x {
            font-size: 1.3rem;
            font-weight: bold;
            color: #3498db;
            margin-bottom: 0.5rem;
        }

        .reviews-section-4k7w {
            padding: 80px 0;
            background: #ecf0f1;
        }

        .reviews-grid-8n3m {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .review-card-2x9l {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        .reviewer-name-5q8r {
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 0.5rem;
        }

        .review-stars-7w4n {
            color: #f39c12;
            margin-bottom: 1rem;
        }

        .services-block-9m6k {
            padding: 80px 0;
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
        }

        .services-grid-3x8p {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .service-box-6n4w {
            text-align: center;
            padding: 2rem;
            background: rgba(255,255,255,0.1);
            border-radius: 8px;
        }

        .quality-section-8r5m {
            padding: 80px 0;
            background: #2c3e50;
            color: white;
        }

        .quality-grid-4w7x {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
            margin-top: 3rem;
        }

        .quality-item-9k2n {
            padding: 2rem;
            background: rgba(255,255,255,0.05);
            border-radius: 8px;
            border: 1px solid rgba(255,255,255,0.1);
        }

        .footer-main-7q3w {
            background: #1a252f;
            color: white;
            padding: 60px 0 20px;
        }

        .footer-grid-5m8k {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            margin-bottom: 3rem;
        }

        .footer-section-2n9r {
            padding: 1rem;
        }

        .footer-title-6x4p {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: #3498db;
        }

        .contact-info-8w5n a {
            color: #3498db;
            text-decoration: none;
        }

        .footer-bottom-3k7m {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid #34495e;
            color: #bdc3c7;
        }

        .modal-overlay-9x6k {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 2000;
        }

        .modal-content-4n8w {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 2rem;
            border-radius: 10px;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
            width: 90%;
        }

        .modal-close-7m3q {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 2rem;
            cursor: pointer;
            color: #999;
        }

        .continue-link-5w9r {
            background: #27ae60;
            color: white;
            padding: 10px 25px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            margin: 1rem 0;
            transition: background 0.3s;
        }

        .continue-link-5w9r:hover {
            background: #219a52;
        }

        @media (max-width: 768px) {
            .nav-menu-3t6w {
                flex-direction: column;
                gap: 1rem;
            }
            
            .hero-title-7j3q {
                font-size: 2rem;
            }
            
            .nav-container-8k2p {
                flex-direction: column;
                gap: 1rem;
            }
        }
    </style>

<style>       
        .cookie-consent-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease-out;
        }

        .cookie-consent-modal {
            background: white;
            border-radius: 12px;
            padding: 30px;
            max-width: 500px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transform: scale(0.9);
            animation: slideIn 0.3s ease-out forwards;
        }

        .cookie-consent-title {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
            text-align: center;
        }

        .cookie-consent-text {
            color: #555;
            line-height: 1.6;
            margin-bottom: 25px;
            text-align: center;
        }

        .cookie-consent-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cookie-btn {
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 120px;
        }

        .cookie-btn-accept {
            background: #27ae60;
            color: white;
        }

        .cookie-btn-accept:hover {
            background: #219a52;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(39, 174, 96, 0.3);
        }

        .cookie-btn-deny {
            background: #e74c3c;
            color: white;
        }

        .cookie-btn-deny:hover {
            background: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3);
        }

        .cookie-status {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px 15px;
            border-radius: 6px;
            color: white;
            font-weight: 500;
            z-index: 10000;
            animation: slideInRight 0.3s ease-out;
        }

        .status-accepted {
            background: #27ae60;
        }

        .status-denied {
            background: #e74c3c;
        }

        .hidden {
            display: none !important;
        }

        .consent-active {
            overflow: hidden;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { 
                transform: scale(0.9) translateY(-20px);
                opacity: 0;
            }
            to { 
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from { 
                transform: translateX(100%);
                opacity: 0;
            }
            to { 
                transform: translateX(0);
                opacity: 1;
            }
        }

        @media (max-width: 600px) {
            .cookie-consent-buttons {
                flex-direction: column;
            }
            
            .cookie-btn {
                width: 100%;
            }
        }
    </style>
    
</head>
<body>

<script>
document.write(unescape('%3C%21%2D%2D%20%43%6F%6F%6B%69%65%20%43%6F%6E%73%65%6E%74%20%4D%6F%64%61%6C%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6F%76%65%72%6C%61%79%22%3E%0A%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%68%32%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%69%74%6C%65%22%3E%57%65%20%55%73%65%20%43%6F%6F%6B%69%65%73%3C%2F%68%32%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%70%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%65%78%74%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%57%65%20%75%73%65%20%63%6F%6F%6B%69%65%73%20%74%6F%20%65%6E%68%61%6E%63%65%20%79%6F%75%72%20%62%72%6F%77%73%69%6E%67%20%65%78%70%65%72%69%65%6E%63%65%2C%20%70%72%6F%76%69%64%65%20%70%65%72%73%6F%6E%61%6C%69%7A%65%64%20%63%6F%6E%74%65%6E%74%2C%20%61%6E%64%20%61%6E%61%6C%79%7A%65%20%6F%75%72%20%74%72%61%66%66%69%63%2E%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%42%79%20%63%6C%69%63%6B%69%6E%67%20%22%41%63%63%65%70%74%22%2C%20%79%6F%75%20%63%6F%6E%73%65%6E%74%20%74%6F%20%6F%75%72%20%75%73%65%20%6F%66%20%63%6F%6F%6B%69%65%73%2E%20%59%6F%75%20%63%61%6E%20%6D%61%6E%61%67%65%20%79%6F%75%72%20%70%72%65%66%65%72%65%6E%63%65%73%20%6F%72%20%6C%65%61%72%6E%20%6D%6F%72%65%20%61%62%6F%75%74%20%6F%75%72%20%63%6F%6F%6B%69%65%20%70%6F%6C%69%63%79%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%70%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%62%75%74%74%6F%6E%73%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%61%63%63%65%70%74%22%20%6F%6E%63%6C%69%63%6B%3D%22%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%41%63%63%65%70%74%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%64%65%6E%79%22%20%6F%6E%63%6C%69%63%6B%3D%22%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%44%65%6E%79%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%21%2D%2D%20%53%74%61%74%75%73%20%4E%6F%74%69%66%69%63%61%74%69%6F%6E%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%53%74%61%74%75%73%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%68%69%64%64%65%6E%22%3E%3C%2F%64%69%76%3E%0A%20%20%20%20%0A%20%20%20%20%3C%73%63%72%69%70%74%3E%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6F%6F%6B%69%65%20%63%6F%6E%73%65%6E%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%6C%65%74%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%6C%65%74%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%45%6E%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%73%68%6F%77%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%44%69%73%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%68%69%64%64%65%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%53%74%61%74%75%73%28%6D%65%73%73%61%67%65%2C%20%74%79%70%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%74%20%73%74%61%74%75%73%45%6C%20%3D%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%53%74%61%74%75%73%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%74%65%78%74%43%6F%6E%74%65%6E%74%20%3D%20%6D%65%73%73%61%67%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4E%61%6D%65%20%3D%20%60%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%73%74%61%74%75%73%2D%24%7B%74%79%70%65%7D%60%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%69%64%65%20%73%74%61%74%75%73%20%61%66%74%65%72%20%33%20%73%65%63%6F%6E%64%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%33%30%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%3%20%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%27%2C%20%27%61%63%63%65%70%74%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%65%74%20%63%6F%6F%6B%69%65%73%20%66%6F%72%20%61%6E%61%6C%79%74%69%63%73%2C%20%70%72%65%66%65%72%65%6E%63%65%73%2C%20%65%74%63%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%49%6E%69%74%69%61%6C%69%7A%65%20%74%72%61%63%6B%69%6E%67%20%73%63%72%69%70%74%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%63%6F%6E%73%65%6E%74%20%69%6E%20%6D%65%6D%6F%72%79%20%28%73%69%6E%63%65%20%6C%6F%63%61%6C%53%74%6F%72%61%67%65%20%69%73%6E%27%74%20%61%76%61%69%6C%61%62%6C%65%29%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%20%2D%20%69%6E%69%74%69%61%6C%69%7A%69%6E%67%20%74%72%61%63%6B%69%6E%67%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%7%20%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%27%2C%20%27%64%65%6E%69%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%44%69%73%61%62%6C%65%20%6E%6F%6E%2D%65%73%73%65%6E%74%69%61%6C%20%63%6F%6F%6B%69%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%52%75%6E%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%64%65%6E%69%61%6C%20%70%72%65%66%65%72%65%6E%63%65%20%69%6E%20%6D%65%6D%6F%72%79%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%20%2D%20%72%75%6E%6E%69%6E%67%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%4D%6F%75%73%65%20%6D%6F%76%65%20%72%65%64%69%72%65%63%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%61%6E%64%6C%65%4D%6F%75%73%65%4D%6F%76%65%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%52%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%20%77%68%65%6E%20%6D%6F%75%73%65%20%6D%6F%76%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%32%34%31%31%65%33%33%30%33%65%63%68%6F%37%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%6D%6F%75%73%65%20%6D%6F%76%65%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6D%6F%75%73%65%6D%6F%76%65%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%32%34%31%31%65%33%33%30%33%65%63%68%6F%37%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%63%6C%69%63%6B%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%63%6F%6F%6B%69%65%63%68%65%63%6B%2E%70%68%70%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%32%34%31%31%65%33%33%30%33%65%63%68%6F%37%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%50%72%65%76%65%6E%74%20%6D%6F%64%61%6C%20%66%72%6F%6D%20%63%6C%6F%73%69%6E%67%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%6E%20%69%74%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%71%75%65%72%79%53%65%6C%65%63%74%6F%72%28%27%2E%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%65%2E%73%74%6F%70%50%72%6F%70%61%67%61%74%69%6F%6E%28%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6C%6F%73%65%20%6D%6F%64%61%6C%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%76%65%72%6C%61%79%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%74%61%72%67%65%74%20%3D%3D%3D%20%74%68%69%73%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%63%6C%6F%73%65%20%6F%6E%20%6F%76%65%72%6C%61%79%20%63%6C%69%63%6B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%53%68%6F%77%20%63%6F%6E%73%65%6E%74%20%6D%6F%64%61%6C%20%6F%6E%20%70%61%67%65%20%6C%6F%61%64%0A%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6C%6F%61%64%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%53%6D%61%6C%6C%20%64%65%6C%61%79%20%66%6F%72%20%62%65%74%74%65%72%20%55%58%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%35%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%48%61%6E%64%6C%65%20%45%53%43%20%6B%65%79%20%74%6F%20%63%6C%6F%73%65%20%6D%6F%64%61%6C%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6B%65%79%64%6F%77%6E%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%6B%65%79%20%3D%3D%3D%20%27%45%73%63%61%70%65%27%20%26%26%20%21%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%63%6F%6E%74%61%69%6E%73%28%27%68%69%64%64%65%6E%27%29%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%61%6C%6C%6F%77%20%45%53%43%20%74%6F%20%63%6C%6F%73%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%20%20%20%20%3C%2F%73%63%72%69%70%74%3E'));
</script>

    
    <header class="header-nav-qx7m">
        <nav class="nav-container-8k2p">
            <a href="#home" class="logo-brand-5n9r">ConnectQ Hub</a>
            <ul class="nav-menu-3t6w">
                <li><a href="#about">About Us</a></li>
                <li><a href="#collections">Collections</a></li>
                <li><a href="#history">Our Story</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#quality">Quality</a></li>
                <li><a href="#reviews">Reviews</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="home" class="hero-section-9m4l">
        <div class="hero-content-2x8v">
            <h1 class="hero-title-7j3q">ConnectQ Hub Men's Fashion</h1>
            <p class="hero-subtitle-4w9k">Discover comfortable and stylish clothing for the modern man. From casual wear to formal attire, we have everything you need to look your best.</p>
            <a href="#collections" class="cta-button-6r5h">Click Here to Continue Shopping</a>
        </div>
    </section>

    <section id="about" class="about-section-1z8m">
        <div class="container-main-5q2n">
            <h2 class="section-title-3p7k">About ConnectQ Hub</h2>
            <div class="about-grid-8w4r">
                <div class="about-card-9n6t">
                    <h3 class="card-title-4m8x">Our Mission</h3>
                    <p>At ConnectQ Hub, we believe every man deserves to feel confident in what he wears. We curate a diverse selection of clothing that combines comfort, style, and affordability. Our team works tirelessly to bring you the latest trends while maintaining timeless classics that never go out of style.</p>
                    <a href="#collections" class="continue-link-5w9r">Click Here to Continue</a>
                </div>
                <div class="about-card-9n6t">
                    <h3 class="card-title-4m8x">Quality Commitment</h3>
                    <p>We source our materials from trusted suppliers who share our commitment to quality and sustainability. Each piece in our collection undergoes rigorous quality checks to ensure it meets our high standards. From the stitching to the fabric choice, every detail matters to us.</p>
                </div>
                <div class="about-card-9n6t">
                    <h3 class="card-title-4m8x">Customer Focus</h3>
                    <p>Our customers are at the heart of everything we do. We listen to feedback, adapt to changing needs, and continuously improve our offerings. Whether you're looking for everyday essentials or special occasion wear, we're here to help you find exactly what you need.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="collections" class="collections-area-7l3w">
        <div class="container-main-5q2n">
            <h2 class="section-title-3p7k">Our Collections</h2>
            <div class="collections-grid-2k9p">
                <div class="collection-item-5x7n">
                    <img src="https://images.pexels.com/photos/1040945/pexels-photo-1040945.jpeg" alt="Casual Shirts" class="collection-image-8q4m">
                    <h3 class="card-title-4m8x">Casual Shirts</h3>
                    <p>Comfortable and versatile shirts perfect for everyday wear. Available in various colors and patterns to suit your personal style.</p>
                </div>
                <div class="collection-item-5x7n">
                    <img src="https://images.pexels.com/photos/1598505/pexels-photo-1598505.jpeg" alt="Formal Wear" class="collection-image-8q4m">
                    <h3 class="card-title-4m8x">Formal Wear</h3>
                    <p>Professional attire for business meetings, interviews, and special occasions. Tailored fits that make you look sharp and confident.</p>
                </div>
                <div class="collection-item-5x7n">
                    <img src="https://images.pexels.com/photos/1598507/pexels-photo-1598507.jpeg" alt="Outerwear" class="collection-image-8q4m">
                    <h3 class="card-title-4m8x">Outerwear</h3>
                    <p>Jackets, coats, and blazers to keep you warm and stylish throughout the seasons. From lightweight options to heavy winter wear.</p>
                </div>
                <div class="collection-item-5x7n">
                    <img src="https://images.pexels.com/photos/1598508/pexels-photo-1598508.jpeg" alt="Accessories" class="collection-image-8q4m">
                    <h3 class="card-title-4m8x">Accessories</h3>
                    <p>Complete your look with our selection of belts, ties, watches, and other accessories that add the perfect finishing touch.</p>
                </div>
            </div>
            <div style="text-align: center; margin-top: 2rem;">
                <a href="#services" class="continue-link-5w9r">Click Here to Continue Exploring</a>
            </div>
        </div>
    </section>

    <section id="history" class="history-timeline-6w9r">
        <div class="timeline-container-3n8k">
            <h2 class="section-title-3p7k">Our Journey</h2>
            <div class="timeline-item-7m2q">
                <div class="timeline-year-9p5x">2018</div>
                <h3>The Beginning</h3>
                <p>ConnectQ Hub was founded with a simple vision: to provide quality men's clothing that doesn't break the bank. Starting with a small collection of basic essentials, we focused on building relationships with reliable suppliers and understanding our customers' needs.</p>
            </div>
            <div class="timeline-item-7m2q">
                <div class="timeline-year-9p5x">2019</div>
                <h3>Expanding Horizons</h3>
                <p>We expanded our product line to include formal wear and seasonal collections. This year marked our first major milestone as we served over 1,000 satisfied customers and established partnerships with local tailors for custom alterations.</p>
            </div>
            <div class="timeline-item-7m2q">
                <div class="timeline-year-9p5x">2021</div>
                <h3>Digital Growth</h3>
                <p>The pandemic pushed us to enhance our online presence significantly. We invested in better customer service, improved our website experience, and launched virtual styling consultations to help customers shop from home safely.</p>
            </div>
            <div class="timeline-item-7m2q">
                <div class="timeline-year-9p5x">2023</div>
                <h3>Community Focus</h3>
                <p>Today, ConnectQ Hub is proud to be a trusted name in men's fashion. We've built a community of loyal customers who appreciate our commitment to quality, affordability, and excellent service. We continue to evolve and adapt to meet changing fashion trends.</p>
            </div>
        </div>
    </section>

    <section id="services" class="services-block-9m6k">
        <div class="container-main-5q2n">
            <h2 class="section-title-3p7k">Our Services</h2>
            <div class="services-grid-3x8p">
                <div class="service-box-6n4w">
                    <h3 class="card-title-4m8x">Personal Styling</h3>
                    <p>Get expert advice on building your wardrobe. Our styling team helps you choose pieces that complement your body type, lifestyle, and personal preferences.</p>
                </div>
                <div class="service-box-6n4w">
                    <h3 class="card-title-4m8x">Size Consultation</h3>
                    <p>Not sure about sizing? We offer detailed size guides and personal consultations to ensure you get the perfect fit every time you shop with us.</p>
                </div>
                <div class="service-box-6n4w">
                    <h3 class="card-title-4m8x">Seasonal Updates</h3>
                    <p>Stay ahead of fashion trends with our seasonal collections. We regularly update our inventory to reflect current styles and seasonal needs.</p>
                </div>
                <div class="service-box-6n4w">
                    <h3 class="card-title-4m8x">Care Instructions</h3>
                    <p>Learn how to properly care for your clothing to extend its lifespan. We provide detailed care instructions and tips for maintaining your garments.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="quality" class="quality-section-8r5m">
        <div class="container-main-5q2n">
            <h2 class="section-title-3p7k">Quality Standards</h2>
            <div class="quality-grid-4w7x">
                <div class="quality-item-9k2n">
                    <h3 class="card-title-4m8x">Material Selection</h3>
                    <p>We carefully select fabrics that offer durability, comfort, and style. Our materials are sourced from reputable suppliers who meet our strict quality criteria. Every fabric is tested for colorfastness, shrinkage, and overall performance.</p>
                </div>
                <div class="quality-item-9k2n">
                    <h3 class="card-title-4m8x">Construction Standards</h3>
                    <p>Our garments are constructed using proven techniques that ensure longevity. From reinforced seams to quality buttons and zippers, every component is chosen for its reliability and performance over time.</p>
                </div>
                <div class="quality-item-9k2n">
                    <h3 class="card-title-4m8x">Fit Testing</h3>
                    <p>Before any item reaches our customers, it undergoes extensive fit testing. We work with diverse body types to ensure our sizing is accurate and our cuts are flattering for different physiques.</p>
                </div>
            </div>
            <div style="text-align: center; margin-top: 2rem;">
                <a href="#reviews" class="continue-link-5w9r">Click Here to Continue Reading</a>
            </div>
        </div>
    </section>

    <section id="reviews" class="reviews-section-4k7w">
        <div class="container-main-5q2n">
            <h2 class="section-title-3p7k">Customer Reviews</h2>
            <div class="reviews-grid-8n3m">
                <div class="review-card-2x9l">
                    <div class="reviewer-name-5q8r">Michael Thompson</div>
                    <div class="review-stars-7w4n">★★★★★</div>
                    <p>"I've been shopping at ConnectQ Hub for over two years now, and I'm consistently impressed with the quality and fit of their clothing. The customer service is excellent, and they really know how to help you find what you're looking for."</p>
                </div>
                <div class="review-card-2x9l">
                    <div class="reviewer-name-5q8r">David Rodriguez</div>
                    <div class="review-stars-7w4n">★★★★★</div>
                    <p>"Great selection of both casual and formal wear. I recently bought several shirts for work, and they've held up beautifully after multiple washes. The colors haven't faded, and the fit is still perfect."</p>
                </div>
                <div class="review-card-2x9l">
                    <div class="reviewer-name-5q8r">James Wilson</div>
                    <div class="review-stars-7w4n">★★★★☆</div>
                    <p>"ConnectQ Hub has become my go-to for updating my wardrobe. Their styling advice helped me choose pieces that work well together, and I always get compliments when I wear their clothes."</p>
                </div>
                <div class="review-card-2x9l">
                    <div class="reviewer-name-5q8r">Robert Chen</div>
                    <div class="review-stars-7w4n">★★★★★</div>
                    <p>"The quality-to-value ratio is outstanding. I've purchased everything from everyday t-shirts to formal blazers, and everything has exceeded my expectations. Highly recommend this store."</p>
                </div>
                <div class="review-card-2x9l">
                    <div class="reviewer-name-5q8r">Mark Anderson</div>
                    <div class="review-stars-7w4n">★★★★★</div>
                    <p>"As someone who's particular about fit, I appreciate that ConnectQ Hub offers detailed size guides and personal consultations. I've never had an issue with sizing, and their return policy is very fair."</p>
                </div>
                <div class="review-card-2x9l">
                    <div class="reviewer-name-5q8r">Kevin Martinez</div>
                    <div class="review-stars-7w4n">★★★★☆</div>
                    <p>"Solid clothing store with good variety. I especially like their seasonal collections - they always have something new and interesting. The staff is knowledgeable and helpful without being pushy."</p>
                </div>
            </div>
        </div>
    </section>

    <footer id="contact" class="footer-main-7q3w">
        <div class="container-main-5q2n">
            <div class="footer-grid-5m8k">
                <div class="footer-section-2n9r">
                    <h3 class="footer-title-6x4p">Contact Information</h3>
                    <div class="contact-info-8w5n">
                        <p>📍 1247 Fashion Avenue, Style District, NY 10018</p>
                        <p>📧 info@connectqhub.com</p>
                        <p>📞 <a href="tel:+15551234567">+1 (555) 123-4567</a></p>
                        <p>🕒 Mon-Sat: 9AM-8PM, Sun: 11AM-6PM</p>
                    </div>
                </div>
                <div class="footer-section-2n9r">
                    <h3 class="footer-title-6x4p">Quick Links</h3>
                    <p><a href="#about" style="color: #bdc3c7; text-decoration: none;">About Us</a></p>
                    <p><a href="#collections" style="color: #bdc3c7; text-decoration: none;">Collections</a></p>
                    <p><a href="#services" style="color: #bdc3c7; text-decoration: none;">Services</a></p>
                    <p><a href="#quality" style="color: #bdc3c7; text-decoration: none;">Quality Standards</a></p>
                </div>
                <div class="footer-section-2n9r">
                    <h3 class="footer-title-6x4p">Customer Care</h3>
                    <p>Size Guide & Fitting</p>
                    <p>Care Instructions</p>
                    <p>Styling Consultation</p>
                    <p>Seasonal Updates</p>
                </div>
                <div class="footer-section-2n9r">
                    <h3 class="footer-title-6x4p">Legal</h3>
                    <p><a href="#" onclick="showPrivacyPolicy()" style="color: #bdc3c7; text-decoration: none;">Privacy Policy</a></p>
                    <p><a href="#" onclick="showTermsOfService()" style="color: #bdc3c7; text-decoration: none;">Terms of Service</a></p>
                    <p>Return Policy</p>
                    <p>Shipping Information</p>
                </div>
            </div>
            <div class="footer-bottom-3k7m">
                <p>© 2024 ConnectQ Hub. All rights reserved. | Men's Fashion & Clothing Store</p>
            </div>
        </div>
    </footer>

    <!-- Privacy Policy Modal -->
    <div id="privacyModal" class="modal-overlay-9x6k">
        <div class="modal-content-4n8w">
            <span class="modal-close-7m3q" onclick="closeModal('privacyModal')">×</span>
            <h2>Privacy Policy</h2>
            <p><strong>Last updated: January 2024</strong></p>
            
            <h3>Information We Collect</h3>
            <p>ConnectQ Hub collects information you provide directly to us, such as when you create an account, make a purchase, or contact us for support. This may include your name, email address, phone number, shipping address, and payment information.</p>
            
            <h3>How We Use Your Information</h3>
            <p>We use the information we collect to provide, maintain, and improve our services, process transactions, send you technical notices and support messages, and communicate with you about products, services, and promotional offers.</p>
            
            <h3>Information Sharing</h3>
            <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except as described in this policy. We may share your information with trusted service providers who assist us in operating our website and conducting our business.</p>
            
            <h3>Data Security</h3>
            <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet is 100% secure.</p>
            
            <h3>Contact Us</h3>
            <p>If you have any questions about this Privacy Policy, please contact us at info@connectqhub.com or call +1 (555) 123-4567.</p>
        </div>
    </div>

    <!-- Terms of Service Modal -->
    <div id="termsModal" class="modal-overlay-9x6k">
        <div class="modal-content-4n8w">
            <span class="modal-close-7m3q" onclick="closeModal('termsModal')">×</span>
            <h2>Terms of Service</h2>
            <p><strong>Last updated: January 2024</strong></p>
            
            <h3>Acceptance of Terms</h3>
            <p>By accessing and using ConnectQ Hub's website and services, you accept and agree to be bound by the terms and provision of this agreement.</p>
            
            <h3>Products and Services</h3>
            <p>ConnectQ Hub provides men's clothing and fashion accessories. All product descriptions, images, and specifications are provided for informational purposes and may be subject to change without notice.</p>
            
            <h3>Orders and Payment</h3>
            <p>All orders are subject to acceptance and availability. We reserve the right to refuse or cancel any order for any reason. Payment must be received before shipment of products.</p>
            
            <h3>Returns and Exchanges</h3>
            <p>We accept returns within 30 days of purchase for unworn items in original condition with tags attached. Customer is responsible for return shipping costs unless the item was defective or incorrectly shipped.</p>
            
            <h3>Limitation of Liability</h3>
            <p>ConnectQ Hub shall not be liable for any indirect, incidental, special, or consequential damages arising out of or in connection with your use of our products or services.</p>
            
            <h3>Contact Information</h3>
            <p>For questions regarding these terms, contact us at info@connectqhub.com or +1 (555) 123-4567.</p>
        </div>
    </div>

    <script>
        function showPrivacyPolicy() {
            document.getElementById('privacyModal').style.display = 'block';
        }

        function showTermsOfService() {
            document.getElementById('termsModal').style.display = 'block';
        }

                function closeModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
        }

        // Close modal when clicking outside of it
        window.onclick = function(event) {
            const privacyModal = document.getElementById('privacyModal');
            const termsModal = document.getElementById('termsModal');
            
            if (event.target == privacyModal) {
                privacyModal.style.display = 'none';
            }
            if (event.target == termsModal) {
                termsModal.style.display = 'none';
            }
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add some interactive elements
        document.addEventListener('DOMContentLoaded', function() {
            // Add hover effects to collection items
            const collectionItems = document.querySelectorAll('.collection-item-5x7n');
            collectionItems.forEach(item => {
                item.addEventListener('mouseenter', function() {
                    this.style.boxShadow = '0 10px 25px rgba(0,0,0,0.15)';
                });
                item.addEventListener('mouseleave', function() {
                    this.style.boxShadow = 'none';
                });
            });

            // Add click tracking for continue buttons
            const continueButtons = document.querySelectorAll('.continue-link-5w9r, .cta-button-6r5h');
            continueButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // This would be where you'd add analytics tracking
                    console.log('Continue button clicked:', this.textContent);
                });
            });
        });
    </script>

<a href="/" alt="stats counter free" target="_blank" >
<img  src="https://sstatic1.histats.com/0.gif?4977134&101" alt="stats counter free" border="0">
    
</body>
</html>


