-- =============================================
-- SEED DATA: 3 categories, 6 articles each
-- =============================================

-- 1. Insert categories
INSERT INTO categories (name, description) VALUES
('Technology & Gadgets', 'Reviews, news, and tips about the latest tech and gadgets.'),
('Programming & Development', 'Tutorials, best practices, and insights for developers.'),
('Design & Creativity', 'Inspiration, tools, and techniques for creative professionals.');

-- Capture category IDs (assuming auto-increment starts at 1)
-- We'll use these IDs explicitly for clarity, but in a real seed script you'd use LAST_INSERT_ID() after each insert.
-- For simplicity, we assume they are 1, 2, 3 respectively.

-- =============================================
-- Category 1: Technology & Gadgets (id=1)
-- =============================================
INSERT INTO articles (image, title, description, content, views, created_at) VALUES
('/assets/images/placeholder.svg',
 'The Rise of Foldable Smartphones',
 'Are foldable phones the future or just a passing fad? We dive deep into the pros and cons of this innovative form factor.',
 'Foldable smartphones have captured the imagination of tech enthusiasts worldwide. With major players like Samsung and Huawei investing heavily in the technology, the market has seen significant improvements in durability and usability. However, questions remain about their long-term viability. This article explores the current state of foldable devices, compares leading models, and discusses whether they are ready for mainstream adoption. From crease visibility to app optimization, we leave no stone unturned.',
 342, '2026-05-15 10:30:00'),

('/assets/images/placeholder.svg',
 'Top 5 Noise-Cancelling Headphones in 2026',
 'We tested dozens of models to bring you the best noise-cancelling headphones for travel, work, and relaxation.',
 'Noise-cancelling technology has advanced by leaps and bounds. This year’s contenders offer adaptive sound control, superior battery life, and crystal-clear call quality. Our roundup includes options for every budget, from premium over-ear giants to compact true-wireless earbuds. Whether you are a frequent flyer or a home-office warrior, you’ll find the perfect pair here. We also discuss the latest audio codecs and how they enhance your listening experience.',
 512, '2026-05-14 14:15:00'),

('/assets/images/placeholder.svg',
 'Smart Home Automation: A Beginner’s Guide',
 'Transform your living space with simple smart home upgrades that save energy and increase convenience.',
 'Starting your smart home journey can be overwhelming with the sheer number of platforms and protocols. This guide breaks down the essentials: smart speakers, lighting, thermostats, and security cameras. We explain the differences between Zigbee, Z-Wave, and Wi-Fi devices, and recommend the best ecosystems for beginners. You’ll learn how to create routines that make your morning coffee start brewing as soon as your alarm goes off, and how to set up a complete security system without professional installation.',
 289, '2026-05-12 09:45:00'),

('/assets/images/placeholder.svg',
 'The Future of Electric Vehicles in Urban Transport',
 'How electric cars, scooters, and bikes are reshaping city life around the globe.',
 'Urban transportation is undergoing a quiet revolution. Electric vehicles are no longer just a luxury; they are becoming the backbone of ride-sharing services and last-mile delivery fleets. In this article, we examine government incentives, charging infrastructure challenges, and the environmental impact of mass EV adoption. We also highlight innovative startups that are merging AI with electric mobility to reduce traffic congestion.',
 175, '2026-05-10 16:20:00'),

('/assets/images/placeholder.svg',
 '5G vs Wi-Fi 6: Which One Do You Really Need?',
 'We compare two next-generation connectivity standards to help you choose the right one for your home or business.',
 'Both 5G and Wi-Fi 6 promise lightning-fast speeds and lower latency, but they serve different purposes. This detailed comparison covers real-world performance, range, device compatibility, and cost. Whether you’re setting up a home network or planning a mobile office, understanding these technologies will help you future-proof your connectivity. We also touch on the emerging Wi-Fi 7 standard and how it might change the game.',
 205, '2026-05-08 11:00:00'),

('/assets/images/placeholder.svg',
 'Wearable Tech: Beyond Fitness Trackers',
 'From smart glasses to health-monitoring rings, wearable technology is entering a new era of practicality.',
 'Fitness trackers have dominated the wearable space for years, but the next wave of devices is aiming for deeper integration into our daily lives. We explore how smart rings can detect early signs of illness, how AR glasses can assist technicians in the field, and how clothing embedded with sensors can improve athletic performance. We also discuss the privacy concerns that come with always-on sensors and what regulators are doing to protect consumers.',
 423, '2026-05-05 08:00:00');

-- Link all Category 1 articles to category 1
INSERT INTO article_category (article_id, category_id)
SELECT id, 1 FROM articles WHERE id IN (
  (SELECT id FROM articles WHERE title = 'The Rise of Foldable Smartphones'),
  (SELECT id FROM articles WHERE title = 'Top 5 Noise-Cancelling Headphones in 2026'),
  (SELECT id FROM articles WHERE title = 'Smart Home Automation: A Beginner’s Guide'),
  (SELECT id FROM articles WHERE title = 'The Future of Electric Vehicles in Urban Transport'),
  (SELECT id FROM articles WHERE title = '5G vs Wi-Fi 6: Which One Do You Really Need?'),
  (SELECT id FROM articles WHERE title = 'Wearable Tech: Beyond Fitness Trackers')
);

-- =============================================
-- Category 2: Programming & Development (id=2)
-- =============================================
INSERT INTO articles (image, title, description, content, views, created_at) VALUES
('/assets/images/placeholder.svg',
 'Mastering Async/Await in JavaScript',
 'Learn how to write cleaner asynchronous code with modern JavaScript syntax.',
 'Asynchronous programming is at the heart of JavaScript, powering everything from web APIs to Node.js servers. The introduction of async/await simplified promise chains, but mastering it requires understanding the underlying event loop. This tutorial walks you through common pitfalls, error handling patterns, and performance optimizations. You’ll build a small weather dashboard application to see the concepts in action.',
 180, '2026-05-16 08:30:00'),

('/assets/images/placeholder.svg',
 'A Practical Guide to Docker for PHP Developers',
 'Containerize your PHP applications with confidence using this step-by-step tutorial.',
 'Docker has become an essential tool for modern development workflows. This guide focuses specifically on PHP environments, covering Dockerfiles, docker-compose configurations, and networking between services. You’ll learn how to set up PHP-FPM, MySQL, and Nginx containers, and how to integrate Xdebug for remote debugging. By the end, you’ll have a reusable template for any PHP project.',
 245, '2026-05-13 12:45:00'),

('/assets/images/placeholder.svg',
 'Introduction to Rust for Web Developers',
 'Why Rust is gaining traction in web development and how you can start learning it today.',
 'Rust’s performance and safety guarantees have made it a popular choice for systems programming, and now it’s making waves in the web ecosystem through frameworks like Actix-web and Rocket. This article explains the core concepts of ownership and borrowing from a JavaScript developer’s perspective, and demonstrates how to build a simple REST API. You’ll also see how Rust compares to Go and Node.js in terms of concurrency and memory usage.',
 137, '2026-05-11 17:10:00'),

('/assets/images/placeholder.svg',
 'Best Practices for API Design in 2026',
 'Designing RESTful APIs that are intuitive, scalable, and easy to consume.',
 'Great APIs are the backbone of the modern internet. In this piece, we cover the latest trends in API design, including the debate between REST and GraphQL, versioning strategies, and hypermedia. We also discuss security considerations like OAuth2 and rate limiting, and provide a checklist you can use before launching your next API. Real-world examples from GitHub, Stripe, and Twilio illustrate these principles.',
 312, '2026-05-09 15:00:00'),

('/assets/images/placeholder.svg',
 'Understanding PHP 8.2: New Features and Improvements',
 'A tour of the latest PHP release with practical examples of how to use its new capabilities.',
 'PHP 8.2 builds on the performance gains of previous versions and introduces readonly classes, standalone types for null/false/true, and deprecation of dynamic properties. We’ll examine each feature in detail, show you how to refactor existing code to leverage them, and discuss the timeline for adoption. This article is essential reading for any PHP developer looking to stay up-to-date.',
 198, '2026-05-07 10:20:00'),

('/assets/images/placeholder.svg',
 'Building Your First CLI Tool with Python',
 'Create powerful command-line applications that automate your daily tasks.',
 'Command-line interfaces are back in a big way, with tools like Click and Typer making development a breeze. This tutorial walks you through building a CLI tool that scrapes weather data and formats it beautifully for the terminal. Along the way, you’ll learn about argument parsing, subcommands, and packaging your tool for distribution via PyPI. No prior CLI experience required.',
 276, '2026-05-03 13:05:00');

-- Link all Category 2 articles to category 2
INSERT INTO article_category (article_id, category_id)
SELECT id, 2 FROM articles WHERE id IN (
  (SELECT id FROM articles WHERE title = 'Mastering Async/Await in JavaScript'),
  (SELECT id FROM articles WHERE title = 'A Practical Guide to Docker for PHP Developers'),
  (SELECT id FROM articles WHERE title = 'Introduction to Rust for Web Developers'),
  (SELECT id FROM articles WHERE title = 'Best Practices for API Design in 2026'),
  (SELECT id FROM articles WHERE title = 'Understanding PHP 8.2: New Features and Improvements'),
  (SELECT id FROM articles WHERE title = 'Building Your First CLI Tool with Python')
);

-- =============================================
-- Category 3: Design & Creativity (id=3)
-- =============================================
INSERT INTO articles (image, title, description, content, views, created_at) VALUES
('/assets/images/placeholder.svg',
 'The Psychology of Color in UI Design',
 'How color choices influence user behavior and how to apply them effectively.',
 'Color is one of the most powerful tools in a designer’s arsenal. This article explores the emotional and psychological effects of different colors and provides practical guidelines for creating accessible and engaging user interfaces. We analyze successful apps and websites, breaking down their color palettes and explaining why they work. You’ll also learn about color contrast requirements and how to test for color blindness compatibility.',
 154, '2026-05-17 09:00:00'),

('/assets/images/placeholder.svg',
 'Minimalist Design: Less Is Still More',
 'Why minimalism continues to dominate digital design and how to do it right.',
 'Minimalist design is not just a trend; it’s a philosophy that reduces cognitive load and puts content first. In this deep dive, we examine the principles of white space, typography, and restrained color schemes. We showcase exemplary minimalist websites and discuss how to avoid the trap of oversimplification. You’ll walk away with a checklist to evaluate whether your next design can benefit from a minimalist approach.',
 211, '2026-05-16 07:30:00'),

('/assets/images/placeholder.svg',
 'Creating Effective Design Systems for Large Teams',
 'Scale your design process and maintain consistency across products with a robust design system.',
 'As companies grow, maintaining visual and functional consistency becomes a challenge. A design system provides a shared language between designers and developers. We outline the key components of a successful system: design tokens, component libraries, and documentation. Through case studies from IBM, Google, and Airbnb, you’ll learn how to get buy-in from stakeholders and evolve your system over time.',
 189, '2026-05-13 15:45:00'),

('/assets/images/placeholder.svg',
 'Typography Trends in 2026: What’s Hot and What’s Not',
 'A look at the typefaces and styles dominating the web this year.',
 'Typography can make or break a design. This year, we see a rise in variable fonts, bold serif headlines, and a resurgence of retro-inspired type. We highlight the best free and paid fonts of 2026 and show examples of how leading brands are using typography to express their identity. Technical tips on font loading performance and subsetting are also included.',
 142, '2026-05-10 11:15:00'),

('/assets/images/placeholder.svg',
 'From Sketch to Prototype: A Modern Design Workflow',
 'Tools and techniques to turn your ideas into interactive prototypes quickly.',
 'The days of static mockups are over. Today’s designers need to create interactive prototypes that convey the full user experience. This article compares Figma, Sketch, and Adobe XD, and shows how to integrate them with tools like Maze for user testing. You’ll follow a real project from initial wireframe to clickable prototype, learning shortcuts and best practices along the way.',
 267, '2026-05-06 14:30:00'),

('/assets/images/placeholder.svg',
 'The Intersection of AI and Graphic Design',
 'How artificial intelligence is transforming the creative process for designers.',
 'AI-powered tools are no longer a curiosity; they are becoming integral to the design workflow. From generating custom illustrations with DALL‑E to automatically resizing layouts with Adobe Sensei, we explore the current state of AI in design. We discuss the ethical implications, the importance of human oversight, and how designers can adapt to stay relevant in an AI-augmented future.',
 398, '2026-05-01 16:00:00');

-- Link all Category 3 articles to category 3
INSERT INTO article_category (article_id, category_id)
SELECT id, 3 FROM articles WHERE id IN (
  (SELECT id FROM articles WHERE title = 'The Psychology of Color in UI Design'),
  (SELECT id FROM articles WHERE title = 'Minimalist Design: Less Is Still More'),
  (SELECT id FROM articles WHERE title = 'Creating Effective Design Systems for Large Teams'),
  (SELECT id FROM articles WHERE title = 'Typography Trends in 2026: What’s Hot and What’s Not'),
  (SELECT id FROM articles WHERE title = 'From Sketch to Prototype: A Modern Design Workflow'),
  (SELECT id FROM articles WHERE title = 'The Intersection of AI and Graphic Design')
);