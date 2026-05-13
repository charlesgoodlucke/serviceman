import { motion } from 'framer-motion';

const Testimonials = () => {
  return (
    <section className="py-12 md:py-20 lg:py-24 px-4 sm:px-6 bg-white rounded-2xl sm:rounded-3xl lg:rounded-[3rem] mt-12 md:mt-20 lg:mt-32 mx-auto max-w-7xl">
      <div className="text-center mb-8 md:mb-12 lg:mb-16">
        <h2 className="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-display font-bold tracking-tight mb-2 md:mb-4 text-brand-dark">Testimonials</h2>
        <p className="text-base sm:text-lg md:text-2xl lg:text-3xl text-gray-500 max-w-2xl mx-auto">
          Here's what some users who have hopped on the ServiceMan train have to say.
        </p>
      </div>

      <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 md:gap-8">
        {[1, 2, 3].map((i) => (
          <motion.div
            key={i}
            initial={{ opacity: 0, y: 40 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true, margin: "-50px" }}
            transition={{ delay: i * 0.1 }}
            className="bg-[#F2F4F7] p-6 sm:p-8 rounded-2xl sm:rounded-3xl text-brand-dark"
          >
            <div className="flex gap-1 mb-4 md:mb-6 text-yellow-400">
              ★★★★★
            </div>
            <p className="text-base sm:text-lg mb-6 md:mb-8 font-medium leading-relaxed">
              "This app is exactly what I needed. Finding a verified plumber used to take days, now it takes literally 3 minutes."
            </p>
            <div className="flex items-center gap-3 sm:gap-4">
              <div className="w-10 sm:w-12 h-10 sm:h-12 bg-gray-300 rounded-full flex-shrink-0"></div>
              <div className="font-bold text-sm sm:text-base">Alex Johnson</div>
            </div>
          </motion.div>
        ))}
      </div>

      {/*<div className="mt-20 text-center">
        <h4 className="text-xl font-bold mb-8 text-brand-dark">In the Press:</h4>
        <div className="flex justify-center items-center gap-12 opacity-50 grayscale hover:grayscale-0 transition-all duration-500">
          <div className="text-2xl font-bold font-display">TechCrunch</div>
          <div className="text-2xl font-bold font-display">Forbes</div>
          <div className="text-2xl font-bold font-display">Wired</div>
        </div>
      </div>*/}
    </section>
  );
};

export default Testimonials;
